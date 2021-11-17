<?php

namespace CitizenNationalIdExtractor;

class CitizenNationalIdExtractor {

    /**
     * @param string|int $nationalId
     */
    public function __construct(public string|int $nationalId)
    {
        $this->nationalId = $nationalId;
    }


    /**
     * @return CitizenNationalIdExtractor|null
     */
    public function verifyCitizen() : CitizenNationalIdExtractor|null
    {
        return (strlen($this->nationalId) === 14 ? $this : null);
    }

    /**
     * @param string $code
     * @return string
     */
    public function GetCitizenGoverment(string $code) : string {

        return match($code)  {

            "01" => "Cairo",
            "02" => "Alexandria",
            "03" => "Portsaid",
            "04" => "Suez",
            "11" => "Damietta",
            "012" => "Daqahlia",
            "13" => "Sharkia",
            "14" => "Qalyobia",
            "15" => "Kafr El-sheikh",
            "16" => "Gharbia",
            "17" => "Monufia",
            "18" => "Beheira",
            "19" => "Ismailia",
            "21" => "Giza",
            "22" => "Bani Suef",
            "23" => "Fayum",
            "24" => "Menya",
            "25" => "Asuit",
            "27" => "Qena",
            "28" => "Aswan",
            "29" => "Luxor",
            "31" => "Red Sea",
            "32" => "Alwady Algaded",
            "33" => "Matrouh",
            "34" => "North Sinai",
            "35" => "South Sinai",
            "88" => "Cairo",
            default => "N/A"
        };

    }

    /**
     * @return int
     */
    public function getCitizenCenturyCode() : string {

        return substr( $this->nationalId , 0 , 1);
    }

    /**
     * @return int
     */
    public function getCitizenBirthdayYear() : int {

        return 1700 + (100 * $this->getCitizenCenturyCode() + substr($this->nationalId , 1 , 2));
    }

    /**
     * @return string
     */
    public function getCitizenBirthdayMonth() : string {
        return  substr($this->nationalId , 3 , 2);
    }

    /**
     * @return string
     */
    public function getCitizenBirthday() : string {
        return  substr($this->nationalId , 5 , 2);
    }

    /**
     * @return string
     */
    public function getCitizenGovermentCode() {
        return substr($this->nationalId , 7 , 2);
    }

    /**
     * @return string
     */
    public function getCitizenGender() : string
    {
        $genderCode = substr($this->nationalId , 11 , 2);
        return $genderCode % 2 == 0 ? "Female" : "Male";
    }

    /**
     * @return array
     */
    public function getCitizenInfo() : array  {

        $year = $this->getCitizenBirthdayYear();
        $month = $this->getCitizenBirthdayMonth();
        $day = $this->getCitizenBirthday();
        $citizinBirthday =  $year . "/" . $month . "/" . $day;

        $gender = $this->getCitizenGender();
        $goverment = $this->GetCitizenGoverment($this->getCitizenGovermentCode());

        return
            [
                "DateOfBirth" => $citizinBirthday,
                'Gender' => $gender,
                'Town' => $goverment
            ];



    }



}
