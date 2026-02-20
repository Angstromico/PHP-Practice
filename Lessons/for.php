<?php

echo "Rocket launch countdown:\n";

for ($i = 10; $i >= 0; $i--) {
    echo "$i...\n";

 if (1 === $i)
  echo "Launching!!\n";

 sleep(1);
}

echo "The Rocket was 🚀!\n";