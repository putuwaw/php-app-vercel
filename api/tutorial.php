<?php
  require __DIR__ . '/../vendor/autoload.php';
  $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
  $dotenv->safeLoad();
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP + Vercel</title>
  <link rel="shortcut icon" href="../public/images/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="../public/styles/styles.css">
  <link rel="stylesheet" href="../public/styles/bootstrap.min.css">
  <link rel="stylesheet" href="../public/styles/atom-one-dark.min.css">
  <script src="../public/scripts/highlight.min.js"></script>
  <script src="<?=$_ENV['FONT_AWESOME'];?>"></script>
  <script src="../public/scripts/scripts.js"></script>
  <script src="../public/scripts/bootstrap.bundle.min.js"></script>
</head>
<body>
  <main class="container-lg">
    <div class="row">
      <div class="col-lg-9 col-12 mx-auto">
        <header class="text-center mt-4">
          <h1 class="mb-4">Deploy PHP Application to Vercel</h1>  
        </header>
        <div>
          <p>
            There are several platforms that can be used to host websites created with the PHP programming language, one of them is Vercel.
            Vercel is a cloud platform for frontend frameworks and static sites.
            To be able to host PHP application, we will use the PHP Runtime for Vercel Serverless Function that was created by
            <a href="https://github.com/vercel-community" class="text-white">
              <i class="fa-brands fa-github"></i> vercel-community.
            </a>
          </p>
        </div>
        <section>
          <h3>Prerequisite</h3>
          <p>Before we get started, there are a few things that need to be prepared.</p>
          <ul>
            <li>
              <h6>GitHub</h6>
              <p>
                GitHub is used to connect Vercel with your GitHub repository. 
                So whenever you change your code, Vercel will automatically deploy your application with the changes you make.
                You can sign up and create your account <a href="https://github.com/signup" class="text-white">here</a>.
              </p>
            </li>
            <li>
              <h6>Vercel</h6>
              <p>Vercel is used to deploy the application and integrated it with your GitHub repository.
                We also need some configuration on Vercel to make the application run perfectly.
                You can sign up and create your account <a href="https://vercel.com/signup" class="text-white">here</a>.
              </p>
            </li>
            <li>
              <h6>PHP</h6>
              <p>PHP is used in development, especially in local development.
                You can modify the application and run it locally using PHP.
                After that, push your changes to GitHub and Vercel will do the rest.
                You can download PHP <a class="text-white" href="https://www.php.net/downloads.php">here</a>.</p>
            </li>
            <li>
              <h6>Composer</h6>
              <p>
                Composer is used to manage dependency for PHP application. 
                With Composer you can easily manage your external libraries used in PHP application.
                You can download Composer <a class="text-white" href="https://getcomposer.org/download/">here</a>.</p>
            </li>
          </ul>
        </section>
        <section>
          <h3>Create Application</h3>
          <p>To simplify the process, we will use this website. You can create a new GitHub repository using 
            <a href="https://github.com/putuwaw/php-app-vercel" class="text-white">this template</a>.
          </p>
          <p>Create a new repository from template.</p>
          <img class="img-fluid rounded border mb-4" src="../public/images/github-template.png" alt="GitHub Template">
          <p>Give the repository name and description, then <kbd>Create repository</kbd>.</p>
          <img class="img-fluid rounded border mb-4" src="../public/images/create-from-template.png" alt="Create From Template">
          <p>The PHP application is ready. Next we will configure Vercel for deployment.</p>
          <img class="img-fluid rounded border mb-4" src="../public/images/success-from-template.png" alt="Success Create From Template">      
        </section>
        <section>
          <h3>Configure Vercel</h3>
          <p>First, you need to have a Vercel account, then connect your GitHub repository to Vercel.</p>
          <p>Select <kbd>Add new</kbd> then choose <kbd>Project</kbd>.</p>
          <img class="img-fluid rounded border mb-4" src="../public/images/new-project-vercel.png" alt="New Project Vercel">          
          <p>Connect with your previous created repository, then click <kbd>Import</kbd>.</p>
          <img class="img-fluid rounded border mb-4" src="../public/images/import-git-repo.png" alt="Import GitHub Repository">
          <p>Give project name and click <kbd>Deploy</kbd>.</p>
          <img class="img-fluid rounded border mb-4" src="../public/images/configure-project-vercel.png" alt="Configure Project Vercel">
          <p>Wait a moment and then your app has been deployed, after that choose <kbd>Continue to Dashboard</kbd>.</p>
          <img class="img-fluid rounded border mb-4" src="../public/images/deploy-app-success.png" alt="Deploy Application Success">
          <p>Select <kbd>Settings</kbd> in your project dashboard.</p>
          <img class="img-fluid rounded border mb-4" src="../public/images/dashboard-setting-vercel.png" alt="Dashboard Setting Vercel">          
          <p>Under your project's <kbd>Settings</kbd>, choose <kbd>Environment Variables</kbd> and then add your Font Awesome kit URL.</p>
          <img class="img-fluid rounded border mb-4" src="../public/images/env-setting-vercel.png" alt="Environtment Setting Vercel">          
          <p>A new deployment is required for your changes to take effect, go to <kbd>Deployments</kbd> to redeploy it.</p>
          <img class="img-fluid rounded border mb-4" src="../public/images/dashboard-deployment-vercel.png" alt="Dashboard Deployment Vercel">
          <p>Under your project's <kbd>Deployments</kbd>, click the ellipsis (tree dots) and then choose <kbd>Redeploy</kbd>.</p>
          <img class="img-fluid rounded border mb-4" src="../public/images/redeploy-vercel.png" alt="Redeploy Vercel">
          <p>Confirm redeploy by clicking <kbd>REDEPLOY</kbd>.</p>
          <img class="img-fluid rounded border mb-4" src="../public/images/confirm-redeploy.png" alt="Confirm Redeploy Vercel">
          <p>Wait a moment and then your app has been redeployed, after that click <kbd>Visit</kbd> to view your application.</p>
          <img class="img-fluid rounded border mb-4" src="../public/images/redeploy-success.png" alt="Redeploy Success">
          <p>Congratulations, you have successfully deploy your PHP application to Vercel.</p>
          <img class="img-fluid rounded border mb-4" src="../public/images/visit-result.png" alt="Visit Result">          
        </section>
        <section>
          <h3>Local Development</h3>
          <p>
            If you want to start to develop your application locally, you can clone the repository you created before.
            Remember to change <kbd>your-name</kbd> with your GitHub username and <kbd>repo-name</kbd> with your repository name.
          </p>          
          <pre><code>git clone https://github.com/your-name/repo-name.git</code></pre>
          <p>Install the dependencies.</p>
          <pre><code>composer install</code></pre>
          <p>Create a <kbd>.env</kbd> file to store your Font Awesome kit URL.</p>
          <pre><code>cp .env.example .env</code></pre>
          <p>Run the app locally.</p>
          <pre><code>php -S localhost:8000</code></pre>
          <p>Open in your browser.</p>
          <pre><code>localhost:8000/api/index.php</code></pre>
        </section>
        <section>
          <h3>Summary</h3>
          <p>That's all about how to deploy PHP application to Vercel.
            If you encounter a problem or want to make a contribution just raise an issue or pull request.
            Highly recommended if you also read the 
            documentation from <a href="https://vercel.com/docs" class="text-white">Vercel</a> and from <a href="https://github.com/vercel-community/php" class="text-white">Vercel-Community</a>.
          </p>
        </section>
        <section class="pt-4">
          <footer class="d-flex flex-wrap justify-content-between align-items-center py-2 border-top">
            <div class="col-md-4 d-flex align-items-center">
              <span class="text-muted">Created with 
                <a href="https://getbootstrap.com/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                  <i class="fa-brands fa-bootstrap" aria-label="Bootstrap Icon"></i>
                  Bootstrap
                </a>
              </span>
            </div>
            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
              <li class="ms-3">
                <a class="text-muted" href="/api/index.php">
                  <i class="fa-solid fa-house"></i>
                </a>
              </li>
            </ul>
          </footer>
        </section>
      </div>
    </div>
  </main>
</body>
</html>
