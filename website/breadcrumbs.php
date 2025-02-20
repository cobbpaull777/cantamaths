<?php if ($page == "option-select") { ?>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb justify-content-center">
      <li class="breadcrumb-item"><a class="active-1-a" href="index.php?"><span class="circle active-bread">1</span>Home</a></li>
      <li class="breadcrumb-item"><a class="active-1-a" href=""><span class="circle active-bread">2</span>Option Select</a></li>
      <li class="breadcrumb-item"><span class="circle inactive">3</span>Select</li>
      <li class="breadcrumb-item"><span class="circle inactive">4</span>Print</li>
    </ol>
  </nav>
<?php } ?>

<?php if ($page == "select-index") { ?>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb justify-content-center">
      <li class="breadcrumb-item"><a class="active-1-a" href="index.php?"><span class="circle active-bread">1</span>Home</a></li>
      <li class="breadcrumb-item"><a class="active-1-a" href="index.php?page=option-select"><span class="circle active-bread">2</span>Option Select</a></li>
      <li class="breadcrumb-item"><a class="active-1-a" href="#"><span class="circle active-bread">3</span>Select</a></li>
      <li class="breadcrumb-item"><span class="circle inactive">4</span>Print</li>
    </ol>
  </nav>
<?php } ?>

<?php if ($page == "print") { ?>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb justify-content-center">
      <li class="breadcrumb-item"><a class="active-1-a" href="index.php?"><span class="circle active-bread">1</span>Home</a></li>
      <li class="breadcrumb-item"><a class="active-1-a" href="index.php?page=option-select"><span class="circle active-bread">2</span>Option Select</a></li>
      <?php if (in_array("custom", $_SESSION['alex!'])) {?>
        <li class="breadcrumb-item"><a class="active-1-a" href="index.php?page=select-index&select=custom"><span class="circle active-bread">3</span>Select</a></li>
      <?php } elseif (in_array("pastpapers", $_SESSION['alex!'])) { ?>
        <li class="breadcrumb-item"><a class="active-1-a" href="index.php?page=select-index&select=pastpapers"><span class="circle active-bread">3</span>Select</a></li>
      <?php } ?>
      <li class="breadcrumb-item"><a class="active-1-a" href="#"><span class="circle active-bread">4</span>Print</a></li>
    </ol>
  </nav>
<?php } ?>
