<?php
/*CODE CAN BE USED TO CHECK WETHER THE BILLING AMOUNT IS LESSER THAN 1000 THAN DELIVERY CHARGES ARE THERE ELSE NO CHARGES ARE THERE USING IT AS A COMMON
FUNCTION CODE TO CHECK AND COUNT EACH AND EVERY ALPHABET FROM A STRING IN PHP (HARD) BASIC TIP FOR THESE KIND OF CHALLENGES WE CAN GIVE THE KEY AS ALPHABET
KEY IS A UNIQUE AND VALUE CAN BE MULTIPLE IN AN ARRAY NOT ONLY NUMBER HAS TO BE KEY IN THE ARRAY */
function CalculateAlphabetsFromString($data)
{
    // NO NEED TO MAKE THE STRING TO LOWER IF WE WANT TO COUNT FOR BOTH CAPITAL AND LOWER LETTER SEPERATELY
    $StringToLower = strtolower($data);
    // CALCULATE THE LENGTH OF THE STRING
    $Length = 0;
    while (isset($StringToLower[$Length])) {
        $Length++;
    }
    // NOW WE WILL COUNT EVERY ALPHABET IN THE STRING AND PUT IT IN AN ARRAY WITH THE KEY AS THE ALPHABET LETTER AND COUNT AS VALUE
    $alphabetCount = [];
    for ($i = 0; $i < $Length; $i++) {
        $char = $StringToLower[$i];
        // ASCII PRACTICE AND NORMAL ONE IS GIVEN BELOW
        // CHECK WETHER THE STRING IS A PROPER ALPHABET OR NOT SIMPLE LOGIC OF ASSIGNING KEY THE CHARACTER OF STRING AND A VALUE OF ONE COUNT
        // AND IF THE ELEMENT WITH THE SAME KEY IS PRESENT INCREMENT ITS VALUE BY ONE
        // || $char >= 'A' && $char <= 'Z'
        if ($char >= 'a' && $char <= 'z') {
            if (!isset($alphabetCount[$char])) {
                $alphabetCount[$char] = 1;
            } else {
                $alphabetCount[$char]++;
            }
        }
    }
    return $alphabetCount;
}
$string = "Hello World";
print_r(CalculateAlphabetsFromString($string));
