<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/projects.css">
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <script src="https://kit.fontawesome.com/994c628b23.js" crossorigin="anonymous"></script>
    <title>PROJECTS</title>
</head>
<body>
    <div class="base-container">
      <nav>
        <img src="public/img/logo2.svg">
        <ul>
            <li>
                <i class="fa-solid fa-diagram-project"></i>
                <a href="#" class="button">projects</a>
            </li>

            <li>
                <i class="fa-solid fa-users"></i>
                <a href="#" class="button">users</a>
            </li>

            <li>
                <i class="fa-solid fa-message"></i>
                <a href="#" class="button">messages</a>
            </li>

            <li>
                <i class="fa-solid fa-envelope"></i>
                <a href="#" class="button">notification</a>
            </li>

            <li>
                <i class="fa-solid fa-gears"></i>
                <a href="#" class="button">settings</a>
            </li>
        </ul>
      </nav>
      <main>
        <header>
            <div class="search-bar">
                <form>
                    <input placeholder="search project">
                </form>
            </div>

            <div class="add-project">
                <i class="fa-solid fa-plus"></i>
              add project
            </div>

        </header>
        <section class="projects">
            <?php foreach($projects as $project): ?>
            <div id="project-1">
                <img src="public/uploads/<?= $project->getImage(); ?>">
                <div>
                    <h2><?= $project->getTitle(); ?></h2>
                    <p><?= $project->getDescription(); ?></p>
                    <div class="social-section">
                        <div>
                            <i class="fas fa-heart"></i>
                            <span>600</span>
                        </div>
                        <div>
                            <i class="fas fa-minus-square"></i>
                            <span>101</span>
                        </div>
                    </div>

                </div>
            </div>
            <?php endforeach; ?>
        </section>
      </main>
    </div>
</body>
