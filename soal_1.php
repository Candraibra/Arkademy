<?php
function biodata($name,$address,$hobbies,$is_maried,$schools,$skills){
    $data = [
        'name'=>$name,
        'address'=>$address,
        'hobbies'=>$hobbies,
        'is_married'=>$is_maried,
        'schools'=>$schools,
        'skills'=>$skills
    ];
    return json_encode($data);
}
$name = 'Candra Ibra Sanie';
$address = 'Purwokerto';
$hobbies = ['coding','ngegame'];
$is_maried = false;
$schools = [
    'highSchool' => 'SMK Telkom Purwokerto',
    'university' => 'belum'
    ];
$skills = [
    'web'=>[
        'css',
        'html',
        'js',
        'php',
        ],
    'android'=>[
        'react-native,',
        'android-studio'
        ]
    ];
echo biodata($name,$address,$hobbies,$is_maried,$schools,$skills);
?>