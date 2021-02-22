<div id='bodyright'>
    <?php
    if(isset($_GET['edit_term'])){ 
        echo edit_term();
    } else {
    ?>
    
    
    <h3>View All T&c</h3>
    <div id='add'>
    <details>
        <summary>Add New T&C </summary>
        <form method="post" enctype="multipart/form-data">
            <select name="for_home" required>
                <option value="">
                    Select Term For
                
                </option>
                <option value="Student">
                    Student
                </option>
                <option value="Teacher">Teachar</option>
            
            </select>
            <input type="text" name="term" placeholder="Enter Terms Name Hear" />
           <center> <button name="add_term">Add T&C</button></center>


    </form>

    </details>
        <table style="width:98%" cellspacing="0">
            <tr>
                <th>Sr No.</th>
                <th>Terms</th>
                <th>For Home</th>
                <th>Action</th>
                
            </tr>
            <?php
            echo view_term();
            ?>
        </table>
    </div>
</div>
<?php 
    echo add_term(); }
?>
