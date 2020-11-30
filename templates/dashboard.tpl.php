<?php
    include 'src/templates/header.tpl.php';
    ?>
    <main>
    <section>
        <h3>Todo list <?=$_SESSION['user']['uname'];?></h3>
        <div style="overflow-x:auto;">
        <table id="mytable" class="tasks">
            <tr>
            <?php
                if($data){
                $columns=array_keys($data[0]);
                
                foreach ($columns as $field) {
                    echo '<th>'.$field.'</th>';
                }
                }
                
                ?>
                <th colspan="2"><span class="great">Actions</span></th>   
            </tr>
        <?php
            if($data){
                foreach ($data as $row){
                    echo '<tr id="row'.$row["id"].'">';
                    foreach ($row as $column => $value) {
                       echo '<td contenteditable>'.$value.'</td>';
                    }
                    echo '<td><button id="update'.$row["id"].'" onclick="edit('.$row["id"].')">Update</button></td>';
                    echo '<td><button id="remove'.$row["id"].'" onclick="remove('.$row["id"].')">Remove</button></td>';
                    echo '</tr>';
                }   
            }
             
        ?>
        </table>
        </div>
        </section>
        <section>
        <a href="?url=newtask"><button><strong>+</strong></button></a>
        </section>
        <section>
            <div id="message"><p></p></div>
        </section>
        
    </main>
    
<?php
    include 'src/templates/footer.tpl.php';
    ?>
