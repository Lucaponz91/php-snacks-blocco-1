<!-- Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
Prendere il paragrafo e suddividerlo in tanti paragrafi. 
Ogni punto un nuovo paragrafo. -->

<?php 
$paragraph = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
Itaque ratione omnis recusandae repudiandae, in voluptatum vitae. 
Facere qui dolore optio earum sequi aliquam ipsum, 
vel rerum quod laborum repudiandae voluptas similique incidunt numquam voluptatibus! 
Dolore laborum error dignissimos beatae reiciendis!';

$par = explode(".", $paragraph);
echo $par;
var_dump($par);
$par1 = $par[0];
$par2 = $par[1];
$par3 = $par[2];

var_dump($par1,$par2,$par3)













?>