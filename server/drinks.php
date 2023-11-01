<?php

include 'db.php';

$meals;

$q = "SELECT * FROM `menu` WHERE type='drinks'";

$res = mysqli_query($conn,$q);

if(mysqli_num_rows($res) > 0){
    while($row = mysqli_fetch_assoc($res)){
        echo "<div class='col-lg-6'>
                    <div class='d-flex align-items-center'>
                        <figure style='width: 80px;height: 80px; overflow: hidden'>
                            <img class='flex-shrink-0 img-fluid rounded' src='../server/uploadedImg/$row[image_name].png' alt='n' style='width: 100%;'>
                        </figure>
                        <div class='w-100 d-flex flex-column text-start ps-4'>
                                  <h5 class='d-flex justify-content-between border-bottom pb-2'>
                                      <span>$row[product_name]</span>
                                      <span class='text-primary'>₹$row[price]</span>
                                   </h5>
                                <small class='fst-italic'>Satisfy your hunger with quality with quantity food.</small>
                        </div>
                    </div>
                </div>";
    }
}

?>