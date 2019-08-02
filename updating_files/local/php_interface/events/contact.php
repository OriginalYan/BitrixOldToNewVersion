<?php

/**
 * Файл для работы с контактами
 */

//Функция для отправки уведомления о дне рождения контакта
function SendInBirthdayDay($countDays){
    //Выполняем функцию для выбора пользователей
    $users = GetUsersWithBirthday($countDays);
    //Если пользователь существует то код выполняется далее
    if (!is_null($users)) {

        //получаем информацию о каждом пользователе из массива
        while ($row = $users->Fetch()) {

            $filter = array("ID" => $row['ASSIGNED_BY_ID']);
            $listInfo = CUser::GetList($by = "id", $order = 'asc', $filter);

            if (!is_null($listInfo)) {
                while ($rowUserAssigned = $listInfo->Fetch()) {

                    //Генерируем сообщение управляющему этого контакта из функции
                    $messageToAssigned = SetMessageToAssigned($row['DATE_BIRTHDAY_THREE_DAYS'], $row, $countDays);

                    if ($row['COMPANY_ID'] != "") $messageToAssigned.= ' Компания <a target="_blank" href="/crm/company/show/' . $row['COMPANY_ID'] . '/">' . $row['TITLE'] . '</a>';

                    //после сформированного сообщения отправляем его
                    writeToChat($rowUserAssigned['ID'], $messageToAssigned);
                    //и отправляем копию менеджеру отдела
                    writeToChat(502, $messageToAssigned);
                }
            }
        }
    }
    //Возвращаем агент, чтобы он не удалился из системы
    return "SendInBirthdayDay({$countDays});";
}

//Функция для пределения дня дня рождения у пользователя

/**
 * @param $type - тип поздравления (за n ней/день в день)
 * @param $dataContact - это даные пользователей которые пришли нам из запроса
 * @param $countDays - оличество дней за которое мы оповещаем человека о др
 * @return string - возвращает сообщение
 */
function SetMessageToAssigned($type, $dataContact, $countDays){
    if ($type == 1)
        $messageToAssigned = 'Через ' . $countDays . ' дня(ей) день рождения у контакта <a target="_blank" href="/crm/contact/show/' . $dataContact['ID'] . '/"/>' . $dataContact['FULL_NAME'] . '</a>.';
    else
        $messageToAssigned = 'Сегодня день рождения у контакта <a target="_blank" href="/crm/contact/show/' . $dataContact['ID'] . '/"/>' . $dataContact['FULL_NAME'] . '</a>.';
    return $messageToAssigned;
}



//запрос к бд для выборки пользователей у кого сегодня день рождение или через n дней

/**
 * @param $countDays - оличество дней за которое мы оповещаем человека о др
 * @return bool|CDBResult
 */
function GetUsersWithBirthday($countDays){

    global $DB;

    $str_query = '
SELECT 
    b_crm_contact.ID, 
    b_crm_contact.ASSIGNED_BY_ID, 
    b_crm_contact.FULL_NAME, 
    SUBSTR(b_crm_contact.BIRTHDATE, 6) as DATE_BIRTHDAY, 
    b_crm_company.TITLE, 
    b_crm_contact.COMPANY_ID,
    SUBSTR(b_crm_contact.BIRTHDATE, 6) = SUBSTR(DATE_ADD(CURRENT_DATE, INTERVAL ' . strval($countDays) . ' DAY), 6) AS DATE_BIRTHDAY_THREE_DAYS

FROM b_crm_contact 

LEFT JOIN b_crm_company ON b_crm_contact.COMPANY_ID = b_crm_company.ID

WHERE (SUBSTR(BIRTHDATE, 6) = SUBSTR(CURRENT_DATE, 6)) OR (SUBSTR(b_crm_contact.BIRTHDATE, 6) = SUBSTR(DATE_ADD(CURRENT_DATE, INTERVAL ' . strval($countDays) . ' DAY), 6))';

    //Выполняем запрос
    $users = $DB->query($str_query);

    return $users;
}