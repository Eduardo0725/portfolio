<div id="projects">
    <h1>PROJETOS</h1>

    <div>
        <?php foreach ($file->projects as $key => $project) { ?>
        <div>
            <h2><?= $project->name ?></h2>

            <p><?= $project->description ?></p>

            <?php 
            echo isset($project->url)
                ? "<a class='link' href='{$project->url}' target='_blank'>GITHUB</a>"
                : '<div></div>';
            ?>
        </div>
        <?php } ?>
    </div>
</div>