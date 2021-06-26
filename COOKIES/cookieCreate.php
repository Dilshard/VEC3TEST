<?php

/* 
No need to start cookie like started session
Store in user's browsers
Use to store data's which is not sensitive
  Like:
     - Favorites
     - Selected theme
  to traceout the users when they login next time

setcookie("name","value", time() + 1000); // time in seconds

*/


setcookie("email","john@bcas.lk", time() + 10);

