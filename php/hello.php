<?php

    include('Job.php');

    $lastName = 'Ramírez';
    //Concatenación
    $name = "David $lastName";
    //$name = 'David '. $lastName;
    $jobTitle = 'Fullstack Developer';
    $avatarURL = "https://ui-avatars.com/api/?name=David+Ramírez&size=255";
    $limitMonths = 365;
    //var_dump($avatarURL); -> Estado de la variable
    $jobs = [
        [
            'title' => 'php developer',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi
            sapiente sed pariatur sint exercitationem eos expedita eveniet
            veniam ullam, quia neque facilis dicta voluptatibus. Eveniet
            doloremque ipsum itaque obcaecati nihil.',
            'visible' => true,
            'months' => 15
        ],
        [
            'title' => 'python developer',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi
            sapiente sed pariatur sint exercitationem eos expedita eveniet
            veniam ullam, quia neque facilis dicta voluptatibus. Eveniet
            doloremque ipsum itaque obcaecati nihil.',
            'visible' => true,
            'months' => 28
        ],
        [
            'title' => 'devOps',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi
            sapiente sed pariatur sint exercitationem eos expedita eveniet
            veniam ullam, quia neque facilis dicta voluptatibus. Eveniet
            doloremque ipsum itaque obcaecati nihil.',
            'visible' => false,
            'months' => 5
        ],
        [
            'title' => 'Node dev',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi
            sapiente sed pariatur sint exercitationem eos expedita eveniet
            veniam ullam, quia neque facilis dicta voluptatibus. Eveniet
            doloremque ipsum itaque obcaecati nihil.',
            'visible' => false,
            'months' => 2
        ],
        [
            'title' => 'FrontEnd',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi
            sapiente sed pariatur sint exercitationem eos expedita eveniet
            veniam ullam, quia neque facilis dicta voluptatibus. Eveniet
            doloremque ipsum itaque obcaecati nihil.',
            'visible' => true,
            'months' => 11
        ]
    ];

    function getDuration($job){
        $months = $job['months'];
        $years = floor($months / 12);
        $extraMonths = $months % 12;
        if($years == 0 ){
            return "Months: $months";
        }else{
            return "Years: $years Months: $months";
        }
    }

    function printJob($job){
        if(!$job['visible']){
            return;
        }
        echo '<li class="work-position">';
                    echo '  <h5>'. $job['title'] .'</h5>';
                    echo '  <p> '. $job['description'] . '</p>';
                    echo '  <p> '. getDuration($job) . '</p>';
                    echo "  <strong>Achievements:</strong>"; 
                    echo "  <ul>";
                    echo "    <li>";
                    echo "      Lorem ipsum dolor sit amet, 80% consectetuer adipiscing";
                    echo "      elit.";
                    echo "    </li>";
                    echo "    <li>";
                    echo "      Lorem ipsum dolor sit amet, 80% consectetuer adipiscing";
                    echo "      elit.";
                    echo "    </li>";
                    echo "    <li>";
                    echo "      Lorem ipsum dolor sit amet, 80% consectetuer adipiscing";
                    echo "      elit.";
                    echo "    </li>";
                    echo "  </ul>";
                    echo "</li>";
    }

?>