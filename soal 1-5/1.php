<?php

echo "Name: ";
$fr_name = trim(fgets(STDIN));

echo "Age: ";
fscanf(STDIN, "%d\n", $fr_age);

print_r('========= Result ===========');
echo "\n"; 
print_r(get_bio($fr_name,$fr_age));

function get_bio($par_name,$par_age)
{
    $name = 'Bayu Puguh';
    $age = 23;
    
    if ($par_name != $name or $par_age != $age) {
        $result = [
            'data' => 'not found'    
        ];
        return json_encode($result);
        exit;
    }
    
    $address = "Taman Ubud Cendana 7 no 16, Lippo Karawaci Tangerang";
    $hobbies = [
        "Badminton", 
        "Swimming"
    ];
    $is_married = false;
    $list_school = [
        ['schoolname' => 'SDN Manukan Kulon V Surabaya','year' => '2002 - 2008','major' => 'SD'],
        ['schoolname' => 'SMP GiKi I Surabaya','year' => '2008 - 2011','major' => 'SMP'],
        ['schoolname' => 'SMAN 7 Surabaya','year' => '2011 - 2014','major' => 'SMA'],
        ['schoolname' => 'AMIK BSI Cimone Tangerang','year' => '2014 - 2017','major' => 'AMD'],
    ];
    $skills = [
        ['PHP' => 'expert'],
        ['ASP.NET' => 'advanced'],
        ['DART' => 'beginner'],
        ['Javascript' => 'advanced'],
        ['HTML' => 'advanced'],
        ['CSS' => 'advanced'],
        ['Laravel' => 'advanced'],
        ['Codeigniter' => 'beginner'],
        ['React JS' => 'beginner'],
        ['Flutter' => 'beginner'],
    ];
    $interest_in_coding = true;
    
    
    $result = [
        'name' => $par_name,
        'age' => $par_age,
        'address' => $address,
        'hobbies' => $hobbies,
        'is_married' => $is_married,
        'list_school' => $list_school,
        'skills' => $skills,
        'interest_in_coding' => $interest_in_coding
    ];
    
    return json_encode($result);
}

?>