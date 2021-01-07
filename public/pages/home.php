<div id="home">
    <div>
        <h1>SOBRE MIM</h1>

        <p><?= $file->aboutMe ?></p>
    </div>

    <div>
        <h1>OBJETIVOS</h1>

        <p><?= $file->objective ?></p>
    </div>

    <div class="skils">
        <div>
            <h1>SOFT SKILLS</h1>

            <ul> 
                <?php foreach ($file->softSkills as $key => $softSkill) { ?>
                <li><?= $softSkill ?>;</li>
                <?php } ?>
            </ul>
        </div>

        <div>
            <h1>HARD SKILLS</h1>

            <ul>
                <?php foreach ($file->hardSkills as $key => $hardSkill) { ?>
                <li><?= $hardSkill ?>;</li>
                <?php } ?>
            </ul>
        </div>
    </div>

    <div>
        <h1>PROJETOS</h1>

        <div>
            <?php foreach ($file->projects as $key => $project) { if ($key > 2) break; ?>
            <div>
                <h2><?= $project->name ?></h2>

                <p><?= $project->description ?></p>

                <?php 
                if (isset($project->url))
                    echo "<a class='link' href='{$project->url}' target='_blank'>GITHUB</a>";
                ?>
            </div>
            <?php } ?>
        </div>

        <a href="/projects">Veja mais</a>
    </div>

    <div>
        <h1>CURSOS COMPLEMENTARES</h1>

        <div>
            <?php foreach ($file->courses as $key => $course) { if ($key > 2) break; ?>
            <div>
                <h2><?= $course->name ?></h2>

                <p><?= $course->description ?></p>

                <?php 
                if (isset($course->certified))
                    echo "<a class='link' href='{$course->certified}' target='_blank'>CERTIFICADO</a>";
                ?>
            </div>
            <?php } ?>
        </div>

        <a href="/courses">Veja mais</a>
    </div>

    <div>
        <h1>FORMAÇÕES</h1>

        <div>
            <?php foreach ($file->formations as $formation) { if ($key > 2) break; ?>
            <div>
                <h2><?= $formation->name ?></h2>

                <p><?= $formation->description ?></p>

                <?php 
                if (isset($formation->certified))
                    echo "<a class='link' href='{$formation->certified}' target='_blank'>CERTIFICADO</a>";
                ?>
            </div>
            <?php } ?>
        </div>
    </div>
</div>