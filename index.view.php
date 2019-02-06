<!DOCTYPE html>

<html>
    <head>
        <title>PHP Practice</title>
        <style>
            
        </style>
    </head>

    <body>
        <ul>
            <?php  foreach ($tasksArray as $task) : ?>
                <li>
                    <?php if ($task->completed) : ?>
                        <strike>
                    <?php endif; ?>
                    
                    <?= $task->description; ?>

                    <?php if ($task->completed) : ?>
                        </strike>
                    <?php endif; ?>
                    
                </li>
            <?php endforeach; ?>

        </ul>

    </body>

</html>
