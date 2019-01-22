
  <?php include("../includes/head.php");?>

    <!-- Navigation -->
    <?php
    $page_name = 'What is GitHub?';
    include("../includes/navi.php");
    ?>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

          <!-- Title -->
          <h1 class="mt-4">What is GitHub?</h1>

          <!-- Author -->
          <!-- <p class="lead">
            by
            <a href="#">Start Bootstrap</a>
          </p> -->

          <!-- <hr> -->

          <!-- Date/Time -->
          <p>Posted on January 1, 2018 at 12:00 PM</p>

          <hr>

          <!-- Preview Image -->
          <img class="img-fluid rounded" src="images/post-main.jpg" alt="">

          <hr>

          <!-- Post Content -->
          <p class="mb-0" style="font-size: 20px; padding-bottom: 15px">GitHub is a website and cloud-based service that helps developers store and manage their code, as well as track and control changes to their code. To understand exactly what GitHub is, you need to know two connected principles:<br>
            <br>&nbsp;&nbsp;&nbsp;&nbsp;&bull; Version control<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&bull; Git</p>

          <hr>

          <img class="img-fluid rounded" src="images/home-illo-team.svg" alt="">
          <h3><strong>What is Version Control?</strong></h3>

          <p class="mb-0" style="font-size: 20px; padding-bottom: 15px">Version control helps developers track and manage changes to a software project’s code. As a software project grows, version control becomes essential. </p>
          
          <p class="mb-0" style="font-size: 20px; padding-bottom: 15px">At this point, WordPress is a pretty big project. If a core developer wanted to work on one specific part of the WordPress codebase, it wouldn’t be safe or efficient to have them directly edit the “official” source code.</p>
          
          <p class="mb-0" style="font-size: 20px; padding-bottom: 15px">Instead, version control lets developers safely work through <strong>branching</strong> and <strong>merging</strong>.</p>
          <p class="mb-0" style="font-size: 20px; padding-bottom: 15px">With <strong>branching</strong>, a developer duplicates part of the source code (called the repository). The developer can then safely make changes to that part of the code without affecting the rest of the project.</p>
          <p class="mb-0" style="font-size: 20px; padding-bottom: 15px">Then, once the developer gets his or her part of the code working properly, he or she can <strong>merge</strong> that code back into the main source code to make it official.</p>
          <p class="mb-0" style="font-size: 20px; padding-bottom: 15px">All of these changes are then tracked and can be reverted if need be.

          <hr>
          
          <h3><strong>What is Git?</strong></h3>
          <img class="img-fluid rounded" src="images/how_git_works.png" alt="">
          

          <p class="mb-0" style="font-size: 20px; padding-bottom: 15px"><br>Git is a specific open-source version control system created by Linus Torvalds in 2005.</p>
          <p class="mb-0" style="font-size: 20px; padding-bottom: 15px">Specifically, Git is <strong>a distributed version control system</strong>, which means that the entire codebase and history is available on every developer’s computer, which allows for easy branching and merging.
            According to a <i>Stack Overflow developer survey</i>, over 87% of developers use Git.</p>

            <!-- Preview Image -->
          <img class="img-fluid rounded" src="images/git_homepage.png" alt="">

          <hr>

          <p class="mb-0" style="font-size: 20px; padding-bottom: 15px">GitHub essentials are:<br><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&bull; Repositories<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&bull; Branches<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&bull; Commits<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&bull; Pull Requests<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&bull; Git (the version control software GitHub is built on)</p>

          <hr>

          <h3><strong>Repository</strong></h3>

          <p class="mb-0" style="font-size: 20px; padding-bottom: 15px">A GitHub <strong>repository</strong> can be used to store a development <strong>project</strong>.</p>
          <p class="mb-0" style="font-size: 20px; padding-bottom: 15px">It can contain folders and any type of files (HTML, CSS, JavaScript, Documents, Data, Images).</p>
          <p class="mb-0" style="font-size: 20px; padding-bottom: 15px">A GitHub repository should also include a <strong>licence</strong> file and a <strong>README</strong> file about the project.</p>
          <p class="mb-0" style="font-size: 20px; padding-bottom: 15px">A GitHub repository can also be used to store ideas, or any resources that you want to share.</p>
          <p class="mb-0" style="font-size: 20px; padding-bottom: 15px"></p>
          <p class="mb-0" style="font-size: 20px; padding-bottom: 15px"></p>

          <hr>

          <h3><strong>Branche</strong></h3>

          <p class="mb-0" style="font-size: 20px; padding-bottom: 15px">A GitHub branch is used to work with different <strong>versions</strong> of a repository at the same time.</p>
          <p class="mb-0" style="font-size: 20px; padding-bottom: 15px">By default a repository has a <strong>master</strong> branch (a production branch).</p>
          <p class="mb-0" style="font-size: 20px; padding-bottom: 15px">Any other branch is a <strong>copy of the master branch</strong> (as it was at a point in time).</p>
          <p class="mb-0" style="font-size: 20px; padding-bottom: 15px">New Branches are for bug fixes and feature work separate from the master branch. When changes are ready, they can be <strong>merged</strong> into the master branch. If you make changes to the master branch while working on a new branch, these updates can be pulled in.</p>
          
          <hr>

          <h3><strong>How to work with Git?</strong></h3>

          <!-- Videos -->
          <table>
            <tr>
              <td style="padding:10px;">
                <p class="mb-0" style="font-size: 20px; padding-bottom: 15px">English tutorial</p>
                <iframe width="350" height="197" src="https://www.youtube.com/embed/0fKg7e37bQE" frameborder="0" allowfullscreen></iframe>
              </td>
              <td style="padding:10px;">
                <p class="mb-0" style="font-size: 20px; padding-bottom: 15px">Sinhala tutorial</p>
                <iframe width="350" height="197" src="https://www.youtube.com/embed/e4n_mlsv3lE" frameborder="0" allowfullscreen></iframe>
              </td>
            </tr>
            <tr>
              <td style="padding:10px;">
                <p class="mb-0" style="font-size: 20px; padding-bottom: 15px">Basic Commands: add, commit, push</p>
                <iframe width="350" height="197" src="https://www.youtube.com/embed/eL_0Ok_Gkas" frameborder="0" allowfullscreen></iframe>
              </td>
              <td style="padding:10px;">
                <p class="mb-0" style="font-size: 20px; padding-bottom: 15px">A Complete tutorial</p>
                <iframe width="350" height="197" src="https://www.youtube.com/embed?listType=playlist&list=PLeo1K3hjS3usJuxZZUBdjAcilgfQHkRzW" frameborder="0" allowfullscreen></iframe>
              </td>
            </tr>
          </table>

          <!-- Comments Form -->
          <!-- <div class="card my-4">
            <h5 class="card-header">Leave a Comment:</h5>
            <div class="card-body">
              <form>
                <div class="form-group">
                  <textarea class="form-control" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div> -->

          <!-- Single Comment -->
          <!-- <div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
            <div class="media-body">
              <h5 class="mt-0">Commenter Name</h5>
              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
            </div>
          </div> -->

          <!-- Comment with nested comments -->
          <!-- <div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
            <div class="media-body">
              <h5 class="mt-0">Commenter Name</h5>
              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

              <div class="media mt-4">
                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                <div class="media-body">
                  <h5 class="mt-0">Commenter Name</h5>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
              </div>

              <div class="media mt-4">
                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                <div class="media-body">
                  <h5 class="mt-0">Commenter Name</h5>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
              </div>

            </div>
          </div> -->

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Search Widget -->
          <!-- <div class="card my-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Go!</button>
                </span>
              </div>
            </div>
          </div> -->

          <!-- Categories Widget -->
          <!-- <div class="card my-4">
            <h5 class="card-header">External Links List</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">GitHub</a>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">JavaScript</a>
                    </li>
                    <li>
                      <a href="#">CSS</a>
                    </li>
                    <li>
                      <a href="#">Tutorials</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div> -->

          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">External Links</h5>
            <div class="card-body">
              <a href="#">Take a Tour - GitHub</a>
            </div>
          </div>

        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <!-- <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; IPTP 2018</p>
      </div> -->
      <!-- /.container -->
    <!-- </footer> -->
    <?php include("../includes/footer.php");?>

<!-- Foot -->
<?php include("../includes/foot.php");?>