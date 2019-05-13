<?php

    include_once('App/models/Job.php');
    include_once('App/models/Project.php');
    require_once('App/models/Printable.php');
    require_once('App/lib/Project.php');

    //require_once 'vendor/autoload.php';

    use App\models\{Job, Project, Printable};

    $lastName = 'Ramírez';
    //Concatenación
    $name = "David $lastName";
    //$name = 'David '. $lastName;
    $jobTitle = 'Fullstack Developer';
    $avatarURL = "https://ui-avatars.com/api/?name=David+Ramírez&size=255";
    $limitMonths = 365;

    //$projectLib = new App\lib\Project;

    $job1 = new Job();
    $job1->setTitle('FrontEnd');
    $job1->setDescription('Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi sapiente sed pariatur sint exercitationem eos expedita eveniet veniam ullam, quia neque facilis dicta voluptatibus. Eveniet doloremque ipsum itaque obcaecati nihil.');
    $job1->setVisible(true);
    $job1->setMonths(11);

    $job2 = new Job();
    $job2->setTitle('Pyton');
    $job2->setDescription('Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi sapiente sed pariatur sint exercitationem eos expedita eveniet veniam ullam, quia neque facilis dicta voluptatibus. Eveniet doloremque ipsum itaque obcaecati nihil.');
    $job2->setVisible(true);
    $job2->setMonths(45);

    $job3 = new Job();
    $job3->setTitle('');
    $job3->setDescription('Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi sapiente sed pariatur sint exercitationem eos expedita eveniet veniam ullam, quia neque facilis dicta voluptatibus. Eveniet doloremque ipsum itaque obcaecati nihil.');
    $job3->setVisible(true);
    $job3->setMonths(5);

    $project1 = new Project();
    $project1->setTitle('Project X');
    $project1->setDescription('Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi sapiente sed pariatur sint exercitationem eos expedita eveniet veniam ullam, quia neque facilis dicta voluptatibus. Eveniet doloremque ipsum itaque obcaecati nihil.');
    $project1->setVisible(true);
    
    $project2 = new Project();
    $project2->setTitle('Project Y');
    $project2->setDescription('Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi sapiente sed pariatur sint exercitationem eos expedita eveniet veniam ullam, quia neque facilis dicta voluptatibus. Eveniet doloremque ipsum itaque obcaecati nihil.');
    $project2->setVisible(true);

    $jobs = [
        $job1,
        $job2,
        $job3
    ];

    $projects = [
        $project1,
        $project2
    ];

    function printImage(){
        $avatarURL = "https://ui-avatars.com/api/?name=David+Ramírez&size=255"; 
        echo '<div class="col-3">';
        echo '          <img';
        echo '            id="profile-picture"';
        echo "            src=$avatarURL";
        echo '            alt=""';
        echo '          />';
        echo '        </div>';
    }

    function printTechnologies(){
        echo '<div class="col">';
        echo '<strong>Technologies used:</strong>';
        echo '<br/>';
        echo '<span class="badge badge-secondary">PHP</span>';
        echo '<span class="badge badge-secondary">HTML</span>';
        echo '<span class="badge badge-secondary">CSS</span>';
        echo '</div>';
    }

    function printElement(Printable $element){
        if(!$element->getVisible()){
            return;
        }
        echo '<li class="work-position">';
                    echo '  <h5>'. $element->getTitle() .'</h5>';
                    echo '  <p> '. $element->getDescription() . '</p>';
                    echo '  <p> '. $element->getDurationAsString() . '</p>';
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

    /*function printElement($element){
        if(!$element->getVisible()){
            return;
        }
        echo '<li class="work-position">';
                    echo '  <h5>'. $element->getTitle() .'</h5>';
                    echo '  <p> '. $element->getDescription() . '</p>';
                    echo '  <p> '. $element->getDurationAsString() . '</p>';
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
    }*/
