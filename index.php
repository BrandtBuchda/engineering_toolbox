<?php include('template.php'); ?>
<?php 
    printTop();
?>
        <div class="page">
            <div class="inner_page">
                <div class="page_header">
                    <p> Welcome to the Refrigeration Engineering Toolbox! </p>
                </div>
                <p> This project is currently under construction. For more information, constact Todd Jekel at the IRC. 
                This Project is scheduled for deployement in late Summer 2020. To get started, choose whether you would 
                like to load a saved file or begin designing a new system.</p>

                    <form name="session" action ="">
                    <input type="submit" onclick="document.session.action = '/sandbox/settings.php'" value="Begin New Session">
                    <input type="submit" onclick="document.session.action = '/sandbox/load.php'" value="Load Existing Session">
            </div>
        </div>
<?php
    printBottom();
?>