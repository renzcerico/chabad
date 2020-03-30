<?php
class Family {
    public $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function insert($data) {
        $first_name = ucfirst($data['first_name']);
        $last_name = ucfirst($data['last_name']);
        $address = strtoupper($data['address']);
        $phone_number = $data['phone_number'];
        $adults = $data['adults'];
        $children = $data['children'];
        $code = mt_rand(10000, 99999);

        $sql = "INSERT INTO tbl_family SET
                    first_name = :first_name,
                    last_name = :last_name,
                    address = :address,
                    phone_number = :phone_number,
                    adults = :adults,
                    children = :children,
                    code = :code
                ";
        
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':first_name', $first_name);
        $stmt->bindParam(':last_name', $last_name);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':phone_number', $phone_number);
        $stmt->bindParam(':adults', $adults);
        $stmt->bindParam(':children', $children);
        $stmt->bindParam(':code', $code);
        $stmt->execute();

        return 201; 
    }

    public function get() {
        $sql = "SELECT * FROM tbl_family";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        
        return $stmt;
    }

    public function getAssistance() {
        $sql = "SELECT id, CONCAT(applicant_first_name, ' ', applicant_last_name) as full_name FROM tbl_assistance";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        return $stmt;
    }

    public function familyAssistance($data) {
        try {
            $applicantFirstName = $data['personalInformation']['applicantFirstName'];
            $applicantLastName = $data['personalInformation']['applicantLastName'];
            $applicantAge = $data['personalInformation']['applicantAge'];
            $spouseFirstName = $data['personalInformation']['spouseFirstName'];
            $spouseLastName = $data['personalInformation']['spouseLastName'];
            $spouseAge = $data['personalInformation']['spouseAge'];
            $address = $data['personalInformation']['address'];
            $apt = $data['personalInformation']['apt'];
            $city = $data['personalInformation']['city'];
            $state = $data['personalInformation']['state'];
            $zipCode = $data['personalInformation']['zipCode'];
            $house = $data['personalInformation']['house'];
            $apartment = $data['personalInformation']['apartment'];
            $isRent = $data['personalInformation']['isRent'];
            $bedrooms = $data['personalInformation']['bedrooms'];
            $emailAddress = $data['personalInformation']['emailAddress'];
            $homeNumber = $data['personalInformation']['homeNumber'];
            $motherNumber = $data['personalInformation']['motherNumber'];
            $fatherNumber = $data['personalInformation']['fatherNumber'];
            $marriageStatus = $data['personalInformation']['marriageStatus'];
            $skillsArray = $data['personalInformation']['skillsArray'];
            $tutor = $data['personalInformation']['tutor'];
            $driver = $data['personalInformation']['driver'];
            $otherSkills = $data['personalInformation']['otherSkills'];

            $skillsArray = count($skillsArray) > 0 ? implode(",", $skillsArray) : 0;

            $sql = "INSERT INTO tbl_assistance 
                        SET applicant_first_name = :applicantFirstName,
                            applicant_last_name = :applicantLastName,
                            applicant_age = :applicantAge,
                            spouse_first_name = :spouseFirstName,
                            spouse_last_name = :spouseLastName,
                            spouse_age = :spouseAge,
                            address = :address,
                            address_apt = :apt,
                            address_city = :city,
                            address_state = :state,
                            address_zip = :zipCode,
                            house = :house,
                            apartment = :apartment,
                            rent = :isRent,
                            bedrooms = :bedrooms,
                            email_address = :emailAddress,
                            home_number = :homeNumber,
                            mother_phone = :motherNumber,
                            father_phone = :fatherNumber,
                            marriage_status = :marriageStatus,
                            skills = :skillsArray,
                            tutor_subject = :tutor,
                            driver = :driver,
                            other = :otherSkills";
            
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':applicantFirstName', $applicantFirstName);
            $stmt->bindParam(':applicantLastName', $applicantLastName);
            $stmt->bindParam(':applicantAge', $applicantAge);
            $stmt->bindParam(':spouseFirstName', $spouseFirstName);
            $stmt->bindParam(':spouseLastName', $spouseLastName);
            $stmt->bindParam(':spouseAge', $spouseAge);
            $stmt->bindParam(':address', $address);
            $stmt->bindParam(':apt', $apt);
            $stmt->bindParam(':city', $city);
            $stmt->bindParam(':state', $state);
            $stmt->bindParam(':zipCode', $zipCode);
            $stmt->bindParam(':house', $house);
            $stmt->bindParam(':apartment', $apartment);
            $stmt->bindParam(':isRent', $isRent);
            $stmt->bindParam(':bedrooms', $bedrooms);
            $stmt->bindParam(':emailAddress', $emailAddress);
            $stmt->bindParam(':homeNumber', $homeNumber);
            $stmt->bindParam(':motherNumber', $motherNumber);
            $stmt->bindParam(':fatherNumber', $fatherNumber);
            $stmt->bindParam(':marriageStatus', $marriageStatus);
            $stmt->bindParam(':skillsArray', $skillsArray);
            $stmt->bindParam(':tutor', $tutor);
            $stmt->bindParam(':driver', $driver);
            $stmt->bindParam(':otherSkills', $otherSkills);
            $stmt->execute();
            
            $assistanceID = $this->conn->lastInsertId();

            $otherWorkType = $data['employmentInformation']['otherWorkType'];
            $otherEmployer = $data['employmentInformation']['otherEmployer'];
            $otherWorkYear = $data['employmentInformation']['otherWorkYear'];
            $otherWorkAddress = $data['employmentInformation']['otherWorkAddress'];
            $otherCity = $data['employmentInformation']['otherCity'];
            $otherZip = $data['employmentInformation']['otherZip'];
            $otherNumber = $data['employmentInformation']['otherNumber'];
            $otherMonthlySalary = $data['employmentInformation']['otherMonthlySalary'];
            $otherMonthlyIncome = $data['employmentInformation']['otherMonthlyIncome'];
            $otherEmploymentReason = $data['employmentInformation']['otherEmploymentReason'];
            $unemployedSince = $data['employmentInformation']['unemployedSince'];
            $lastJobInterview = $data['employmentInformation']['lastJobInterview'];
            $otherHasCar = $data['employmentInformation']['otherHasCar'];
            $otherSourcesIncome = $data['employmentInformation']['otherSourcesIncome'];
            $otherInvestment = $data['employmentInformation']['otherInvestment'];
            $totalSaving = $data['employmentInformation']['totalSaving'];
            $totalChecking = $data['employmentInformation']['totalChecking'];

            $sqlOthers = "INSERT INTO tbl_others
                                SET type_of_work = :otherWorkType,
                                    employer = :otherEmployer,
                                    year = :otherWorkYear,
                                    work_address = :otherWorkAddress,
                                    city = :otherCity,
                                    zip = :otherZip,
                                    work_number = :otherNumber,
                                    monthly_salary = :otherMonthlySalary,
                                    hourly_income = :otherMonthlyIncome,
                                    unemployment_reason = :otherEmploymentReason,
                                    unemployed_since = :unemployedSince,
                                    last_interview = :lastJobInterview,
                                    car = :otherHasCar,
                                    sources_income = :otherSourcesIncome,
                                    investment = :otherInvestment,
                                    total_savings = :totalSaving,
                                    current = :totalChecking";

            $stmtOthers = $this->conn->prepare($sqlOthers);
            $stmtOthers->bindParam(':otherWorkType', $otherWorkType);
            $stmtOthers->bindParam(':otherEmployer', $otherEmployer);
            $stmtOthers->bindParam(':otherWorkYear', $otherWorkYear);
            $stmtOthers->bindParam(':otherWorkAddress', $otherWorkAddress);
            $stmtOthers->bindParam(':otherCity', $otherCity);
            $stmtOthers->bindParam(':otherZip', $otherZip);
            $stmtOthers->bindParam(':otherNumber', $otherNumber);
            $stmtOthers->bindParam(':otherMonthlySalary', $otherMonthlySalary);
            $stmtOthers->bindParam(':otherMonthlyIncome', $otherMonthlyIncome);
            $stmtOthers->bindParam(':otherEmploymentReason', $otherEmploymentReason);
            $stmtOthers->bindParam(':unemployedSince', $unemployedSince);
            $stmtOthers->bindParam(':lastJobInterview', $lastJobInterview);
            $stmtOthers->bindParam(':otherHasCar', $otherHasCar);
            $stmtOthers->bindParam(':otherSourcesIncome', $otherSourcesIncome);
            $stmtOthers->bindParam(':otherInvestment', $otherInvestment);
            $stmtOthers->bindParam(':totalSaving', $totalSaving);
            $stmtOthers->bindParam(':totalChecking', $totalChecking);
            $stmtOthers->execute();
            
            $othersID = $this->conn->lastInsertId();
            
            $workType = $data['employmentInformation']['workType'];
            $employer = $data['employmentInformation']['employer'];
            $workYears = $data['employmentInformation']['workYears'];
            $workAddress = $data['employmentInformation']['workAddress'];
            $workCity = $data['employmentInformation']['workCity'];
            $workZip = $data['employmentInformation']['workZip'];
            $workNumber = $data['employmentInformation']['workNumber'];
            $monthlySalary = $data['employmentInformation']['monthlySalary'];
            $hourlyIncome = $data['employmentInformation']['hourlyIncome'];
            $reasonUnemployment = $data['employmentInformation']['reasonUnemployment'];
            $unemployedSince = $data['employmentInformation']['unemployedSince'];
            $lastJobInterview = $data['employmentInformation']['lastJobInterview'];
            $hasCar = $data['employmentInformation']['hasCar'];
            $otherSourcesIncome = $data['employmentInformation']['otherSourcesIncome'];
            $otherHasCar = $data['employmentInformation']['otherHasCar'];
            
            $sqlEmployment = 'INSERT INTO tbl_employment_information
                                SET assistance_id = :assistanceID,
                                    type_of_work = :workType,
                                    employer = :employer,
                                    years = :workYears,
                                    work_address = :workAddress,
                                    city = :workCity,
                                    zip = :workZip,
                                    work_number = :workNumber,
                                    monthly_salary = :monthlySalary,
                                    hourly_income = :hourlyIncome,
                                    unemployment_reason = :reasonUnemployment,
                                    unemployed_since = :unemployedSince,
                                    last_interview = :lastJobInterview,
                                    car = :hasCar,
                                    sources_income = :otherSourcesIncome,
                                    invest = :otherInvestment,
                                    others_car = :otherHasCar,
                                    others_id = :othersID';
            $stmtEmployment = $this->conn->prepare($sqlEmployment);
            $stmtEmployment->bindParam(':assistanceID', $assistanceID);
            $stmtEmployment->bindParam(':workType', $workType);
            $stmtEmployment->bindParam(':employer', $employer);
            $stmtEmployment->bindParam(':workYears', $workYears);
            $stmtEmployment->bindParam(':workAddress', $workAddress);
            $stmtEmployment->bindParam(':workCity', $workCity);
            $stmtEmployment->bindParam(':workZip', $workZip);
            $stmtEmployment->bindParam(':workNumber', $workNumber);
            $stmtEmployment->bindParam(':monthlySalary', $monthlySalary);
            $stmtEmployment->bindParam(':hourlyIncome', $hourlyIncome);
            $stmtEmployment->bindParam(':reasonUnemployment', $reasonUnemployment);
            $stmtEmployment->bindParam(':unemployedSince', $unemployedSince);
            $stmtEmployment->bindParam(':lastJobInterview', $lastJobInterview);
            $stmtEmployment->bindParam(':hasCar', $hasCar);
            $stmtEmployment->bindParam(':otherSourcesIncome', $otherSourcesIncome);
            $stmtEmployment->bindParam(':otherInvestment', $otherInvestment);
            $stmtEmployment->bindParam(':otherHasCar', $otherHasCar);
            $stmtEmployment->bindParam(':othersID', $othersID);
            $stmtEmployment->execute();

            $welfare = $data['governmentAssistance']['welfare'];
            $foodStamps = $data['governmentAssistance']['foodStamps'];
            $medicAid = $data['governmentAssistance']['medicAid'];
            $medicare = $data['governmentAssistance']['medicare'];
            $ssi = $data['governmentAssistance']['ssi'];
            $hud = $data['governmentAssistance']['hud'];
            $wic = $data['governmentAssistance']['wic'];
            $section8 = $data['governmentAssistance']['section8'];
            $cityFeps = $data['governmentAssistance']['cityFeps'];
            $ihss = $data['governmentAssistance']['ihss'];
            $governmentOther = $data['governmentAssistance']['governmentOther'];
            $rentMortgage = $data['governmentAssistance']['rentMortgage'];
            $clothing = $data['governmentAssistance']['clothing'];
            $gasCompany = $data['governmentAssistance']['gasCompany'];
            $medicalInsurance = $data['governmentAssistance']['medicalInsurance'];
            $lifeInsurance = $data['governmentAssistance']['lifeInsurance'];
            $carPayments = $data['governmentAssistance']['carPayments'];
            $carInsurance = $data['governmentAssistance']['carInsurance'];
            $waterBill = $data['governmentAssistance']['waterBill'];
            $electricalBill = $data['governmentAssistance']['electricalBill'];
            $dsl = $data['governmentAssistance']['dsl'];
            $tuition = $data['governmentAssistance']['tuition'];
            $homeMaintenance = $data['governmentAssistance']['homeMaintenance'];
            $misc = $data['governmentAssistance']['misc'];
            $gapDescription = $data['governmentAssistance']['gapDescription'];
            $counseling = $data['governmentAssistance']['counseling'];
            $monthlyExpenses = $data['governmentAssistance']['monthlyExpenses'];

            $sqlGoverntment = 'INSERT INTO tbl_government
                                SET assistance_id = :assistance_id,
                                    welfare = :welfare,
                                    food_stamps = :foodStamps,
                                    medicaid = :medicAid,
                                    medicare = :medicare,
                                    ssi = :ssi,
                                    hud = :hud,
                                    wic = :wic,
                                    sec_8 = :section8,
                                    city_feps = :cityFeps,
                                    ihss = :ihss,
                                    other = :governmentOther,
                                    rent = :rentMortgage,
                                    clothing = :clothing,
                                    gas = :gasCompany,
                                    medical_ins = :medicalInsurance,
                                    life_ins = :lifeInsurance,
                                    car_payments = :carPayments,
                                    car_ins = :carInsurance,
                                    water = :waterBill,
                                    electrical = :electricalBill,
                                    dsl = :dsl,
                                    tuition = :tuition,
                                    maintenance = :homeMaintenance,
                                    msc = :misc,
                                    gap_description = :gapDescription,
                                    financial_counseling = :counseling,
                                    monthly_expenses = :monthlyExpenses';

            $stmtGovernment = $this->conn->prepare($sqlGoverntment);
            $stmtGovernment->bindParam(':assistance_id', $assistanceID);
            $stmtGovernment->bindParam(':welfare', $welfare);
            $stmtGovernment->bindParam(':foodStamps', $foodStamps);
            $stmtGovernment->bindParam(':medicAid', $medicAid);
            $stmtGovernment->bindParam(':medicare', $medicare);
            $stmtGovernment->bindParam(':ssi', $ssi);
            $stmtGovernment->bindParam(':hud', $hud);
            $stmtGovernment->bindParam(':wic', $wic);
            $stmtGovernment->bindParam(':section8', $section8);
            $stmtGovernment->bindParam(':cityFeps', $cityFeps);
            $stmtGovernment->bindParam(':ihss', $ihss);
            $stmtGovernment->bindParam(':governmentOther', $governmentOther);
            $stmtGovernment->bindParam(':rentMortgage', $rentMortgage);
            $stmtGovernment->bindParam(':clothing', $clothing);
            $stmtGovernment->bindParam(':gasCompany', $gasCompany);
            $stmtGovernment->bindParam(':medicalInsurance', $medicalInsurance);
            $stmtGovernment->bindParam(':lifeInsurance', $lifeInsurance);
            $stmtGovernment->bindParam(':carPayments', $carPayments);
            $stmtGovernment->bindParam(':carInsurance', $carInsurance);
            $stmtGovernment->bindParam(':waterBill', $waterBill);
            $stmtGovernment->bindParam(':electricalBill', $electricalBill);
            $stmtGovernment->bindParam(':dsl', $dsl);
            $stmtGovernment->bindParam(':tuition', $tuition);
            $stmtGovernment->bindParam(':homeMaintenance', $homeMaintenance);
            $stmtGovernment->bindParam(':misc', $misc);
            $stmtGovernment->bindParam(':gapDescription', $gapDescription);
            $stmtGovernment->bindParam(':counseling', $counseling);
            $stmtGovernment->bindParam(':monthlyExpenses', $monthlyExpenses);
            $stmtGovernment->execute();

            $children = count($data['personalInformation']['childrenArray']) || 0;
            
            if ( $children > 0) {
                $childrenArray = $data['personalInformation']['childrenArray'];
                
                foreach($childrenArray as $child) {
                    $childFirstName = $child['childFirstName'];
                    $childLastName = $child['childLastName'];
                    $childMiddleName = $child['childMiddleName'];
                    $childSchool = $child['childSchool'];
                    $childAge = $child['childAge'];

                    $sqlChild = "INSERT INTO tbl_children
                                    SET assistance_id = :assistanceID,
                                        first_name = :childFirstName,
                                        last_name = :childLastName,
                                        middle_name = :childMiddleName,
                                        school = :childSchool,
                                        age = :childAge";

                    $stmtChildren = $this->conn->prepare($sqlChild);
                    $stmtChildren->bindParam(':assistanceID', $assistanceID);
                    $stmtChildren->bindParam(':childFirstName', $childFirstName);
                    $stmtChildren->bindParam(':childLastName', $childLastName);
                    $stmtChildren->bindParam(':childMiddleName', $childMiddleName);
                    $stmtChildren->bindParam(':childSchool', $childSchool);
                    $stmtChildren->bindParam(':childAge', $childAge);
                    $stmtChildren->execute();
                }
            }
            
        } catch (PDOException $ex) {
            return $ex->getMessage();
            die();
        }
        // return json_encode($data['personalInformation']['applicantFirstName']);
    }

    public function getById($id) {
        $sqlAssistance = "SELECT * FROM tbl_assistance WHERE id = :id";
        $stmtAssistance = $this->conn->prepare($sqlAssistance);
        $stmtAssistance->bindParam(':id', $id);
        $stmtAssistance->execute();
        $stmtAssistance = $stmtAssistance->fetch(PDO::FETCH_ASSOC);

        $sqlEmployment = "SELECT * FROM tbl_employment_information WHERE assistance_id = :id";
        $stmtEmployment = $this->conn->prepare($sqlEmployment);
        $stmtEmployment->bindParam(':id', $id);
        $stmtEmployment->execute();
        $stmtEmployment = $stmtEmployment->fetch(PDO::FETCH_ASSOC);
        $others_id = $stmtEmployment['others_id'];

        $sqlOthers = "SELECT * FROM tbl_others WHERE id = :id";
        $stmtOthers = $this->conn->prepare($sqlOthers);
        $stmtOthers->bindParam(':id', $others_id);
        $stmtOthers->execute();
        $stmtOthers = $stmtOthers->fetch(PDO::FETCH_ASSOC);

        $sqlGovernment = "SELECT * FROM tbl_government WHERE assistance_id = :id";
        $stmtGovernment = $this->conn->prepare($sqlGovernment);
        $stmtGovernment->bindParam(':id', $id);
        $stmtGovernment->execute();
        $stmtGovernment = $stmtGovernment->fetch(PDO::FETCH_ASSOC);

        $sqlChildren = "SELECT * FROM tbl_children WHERE assistance_id = :id";
        $stmtChildren = $this->conn->prepare($sqlChildren);
        $stmtChildren->bindParam(':id', $id);
        $stmtChildren->execute();
        $stmtChildren = $stmtChildren->fetch(PDO::FETCH_ASSOC);

        $result = [
            'assistance' => $stmtAssistance,
            'employment' => $stmtEmployment,
            'others' => $stmtOthers,
            'government' => $stmtGovernment,
            'children' => $stmtChildren
        ];

        return $result;

    }
}
?>