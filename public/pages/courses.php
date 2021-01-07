<div id="courses">
    <h1>CURSOS COMPLEMENTARES</h1>

    <div>
        <?php foreach ($file->courses as $key => $course) { ?>
        <div>
            <h2><?= $course->name ?></h2>

            <p><?= $course->description ?></p>
        </div>
        
        <?php 
            if (isset($course->certified))
                echo "<a class='link' href='{$course->certified}' target='_blank'>CERTIFICADO</a>";
        } 
        ?>
    </div>
</div>