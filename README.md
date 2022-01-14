# Egyption National ID Extractor
>Extract information from egyptian national id like date of birth , place of birth , gender and much more



Can be used in government organizations and special organizations who use egyptian national id only

### Requirements

1. Composer
2. PHP version 8 or newer

### Installation

```php
composer require abdelazizomar/egyption-national-id-extractor
```

### Usage

```php
// Intitialize CitizenNationalIdExtractor class
$citizenData = new CitizenNationalIdExtractor(nationalId: "29803050202393");
```

```php
// To get citizen century code
$citizenData->getCitizenCenturyCode();

//or you can use null-safe operator to make sure that national id is correct equal (14 number) and the output may be (null|int)
$citizenData->verifyCitizen()?->getCitizenCenturyCode();

int(2)
```

```php
// To get citizen goverment code
$citizenData->getCitizenGovermentCode();

//or you can use null-safe operator to make sure that national id is correct equal (14 number) and the output may be (null|string)
$citizenData->verifyCitizen()?->getCitizenGovermentCode();

string(2) "02"
```

```php
// To get citizen Goverment
$citizenData->GetCitizenGoverment(code: citizenData->getCitizenGovermentCode());

//or you can use null-safe operator to make sure that national id is correct equal (14 number) and the output may be (null|string)
$citizenData->verifyCitizen()?->GetCitizenGoverment(code: citizenData->getCitizenGovermentCode());

string(10) "Alexandria"
```

```php
// To get citizen birthday year
$citizenData->getCitizenBirthdayYear();

//or you can use null-safe operator to make sure that national id is correct equal (14 number) and the output may be (null|int)
$citizenData->verifyCitizen()?->getCitizenBirthdayYear();

int(1998)
```

```php
// To get citizen birthday month
$citizenData->getCitizenBirthdayMonth();

//or you can use null-safe operator to make sure that national id is correct equal (14 number) and the output may be (null|string)
$citizenData->verifyCitizen()?->getCitizenBirthdayMonth();

string(2) "03"
```

```php
// To get citizen birthday day
$citizenData->getCitizenBirthdayMonth();

//or you can use null-safe operator to make sure that national id is correct equal (14 number) and the output may be (null|string)
$citizenData->verifyCitizen()?->getCitizenBirthday();

string(2) "05"
```

```php
// To get citizen gender
$citizenData->getCitizenGender();

//or you can use null-safe operator to make sure that national id is correct equal (14 number) and the output may be (null|string)
$citizenData->verifyCitizen()?->getCitizenGender();

string(4) "Male"
```


```php
// To get citizen all information
$citizenData->getCitizenInfo();

//or you can use null-safe operator to make sure that national id is correct equal (14 number) and the output may be (null|array)
$citizenData->verifyCitizen()?->getCitizenInfo();

array(3) {
  ["DateOfBirth"]=>
  string(10) "1998/03/05"
  ["Gender"]=>
  string(4) "Male"
  ["Town"]=>
  string(10) "Alexandria"
}
```

