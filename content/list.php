<!-- Head -->
<?php include("includes/head.php")?>

    <!-- Navigation -->
    <?php
    $page_name = 'Site Content';
    include("includes/navi.php");
    ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <h1 class="my-4">Site Content
          <small><br>Tools & Technologies</small>
        </h1>
        <hr>
      <!-- Project One -->
      <div class="row">
          <div class="col-md-7">
            <a href="#">
              <img class="img-fluid rounded mb-3 mb-md-0" src="github/post-main.jpg" alt="">
            </a>
          </div>
          <div class="col-md-5">
            <h3>What is GitHub?</h3>
            <p><strong>The world's leading software development platform.</strong><br>GitHub is a website and cloud-based service that helps developers store and manage their code, as well as track and control changes to their code. </p>
            <a class="btn btn-primary" href="github/github.php">View More</a>
          </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Two -->
        <div class="row">
          <div class="col-md-7">
            <a href="#">
              <img class="img-fluid rounded mb-3 mb-md-0" src="github/post-main.jpg" alt="">
            </a>
          </div>
          <div class="col-md-5">
            <h3>Gitflow Workflow</h3>
            <p><strong>Gitflow is really just an abstract idea of a Git workflow.</strong><br>Gitflow Workflow is a Git workflow design that was first published and made popular by Vincent Driessen at nvie.</p>
            <a class="btn btn-primary" href="gitflow/gitflow.php">View More</a>
          </div>
        </div>
        <!-- /.row -->

        <!-- <hr> -->

        <!-- Project Three -->
        <!-- <div class="row">
          <div class="col-md-7">
            <a href="#">
              <img class="img-fluid rounded mb-3 mb-md-0" src="http://placehold.it/700x300" alt="">
            </a>
          </div>
          <div class="col-md-5">
            <h3>Project Three</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, temporibus, dolores, at, praesentium ut unde repudiandae voluptatum sit ab debitis suscipit fugiat natus velit excepturi amet commodi deleniti alias possimus!</p>
            <a class="btn btn-primary" href="#">View Project</a>
          </div>
        </div> -->
        <!-- /.row -->
        <hr>

      <!-- Pagination -->
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>

    </div>

    <!-- Footer -->
    <?php include("includes/footer.php")?>

<!-- Foot -->
<?php include("includes/foot.php")?>