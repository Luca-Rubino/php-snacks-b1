<?php

$text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus mattis dapibus auctor. Praesent vitae ultricies justo, ac finibus leo. Donec orci sem, mollis ornare gravida eu, finibus eget dolor. Sed vel urna eu mauris viverra convallis. Mauris sit amet gravida neque. Donec diam turpis, ultrices ac lacinia a, viverra et libero. Ut posuere dapibus purus. Maecenas rutrum pharetra lacus, quis porttitor nisl interdum vel. Morbi ornare lorem nisl, non mattis felis egestas in. Quisque dui augue, condimentum id tincidunt in, malesuada sed lectus. In semper arcu id dui accumsan facilisis. Praesent ut porta nulla. In hac habitasse platea dictumst. Fusce hendrerit augue dui, id hendrerit purus faucibus nec. Duis sodales dictum orci, ac dignissim odio facilisis non. Nullam ultricies lacus nisi, pretium luctus metus efficitur vitae. Morbi molestie massa sit amet leo euismod, in tincidunt massa bibendum. Quisque placerat pretium dapibus. Etiam ullamcorper maximus tortor in fermentum. Quisque a lacinia enim, ac ornare leo. Cras varius massa ut risus tempus varius. Etiam sollicitudin at sem vitae accumsan. Morbi et nibh a ligula rhoncus hendrerit. Fusce leo tortor, laoreet nec ipsum vitae, ullamcorper imperdiet urna. Vivamus in metus quis neque volutpat dignissim. Pellentesque ut pellentesque erat. Suspendisse potenti. Vestibulum hendrerit at dolor vel semper. Nulla lacinia orci quis dolor ornare molestie. Vivamus quis nisi semper, lobortis metus eget, tristique mauris. Vivamus tincidunt diam at aliquam suscipit. Cras ex nulla, commodo a turpis sit amet, finibus pharetra erat. Nulla congue et urna eu porttitor. Quisque bibendum purus et arcu venenatis volutpat. Morbi aliquam ullamcorper risus ut suscipit. Donec volutpat leo leo, sit amet pellentesque ipsum lobortis vel. Donec enim tortor, elementum in semper sit amet, laoreet ac nisl. Donec blandit purus elementum, feugiat est vel, vehicula diam. Ut egestas porttitor leo, ut porttitor est malesuada eget. Mauris eu orci sit amet nibh varius feugiat nec at arcu. Phasellus id enim eu nisi laoreet condimentum. Nulla sed odio nisl. Ut nulla nibh, sollicitudin non purus non, vehicula sodales quam. Mauris quis commodo magna, eget elementum nulla. Etiam tristique orci at porta ullamcorper. Nulla magna nunc, dapibus a imperdiet vestibulum, bibendum vitae orci. Sed vitae dapibus mi. Sed ac placerat lorem, in placerat mauris. Integer vitae faucibus nisi. Vestibulum iaculis pulvinar eleifend. Ut dictum mi non elementum sollicitudin. Etiam ultrices laoreet fermentum. Suspendisse potenti.";

$paragrafi = explode(".", $text);

// stampe di controllo
// var_dump($paragrafi);
// var_dump(count($paragrafi));
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-5</title>
</head>
<body>
    <?php foreach ($paragrafi as $paragrafi => $paragrafo) { ?>
        <p><?php echo $paragrafo; ?></p>
    <?php } ?>
    
</body>
</html>