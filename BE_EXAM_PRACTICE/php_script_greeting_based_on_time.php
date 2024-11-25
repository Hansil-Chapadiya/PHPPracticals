<?php
$time = date("d/m/y H:i:s");
echo $time;
if ($time <= 11) {
    echo "Good morning";
} elseif ($time > 11 && $time <= 5) {
    echo "Good AfterNoon";
} elseif ($time > 5 && $time <= 7) {
    echo "Good Evening";
} else {
    echo "Good Night";
}
?>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        let text = "<div style='color:red;'>Gujarat Technological University</div>";
        let div = document.createElement('div');
        div.innerHTML = text;
        document.body.appendChild(div);

        for (let index = 1; index <= 50; index++) {
            setTimeout(() => {
                // Access the index variable directly because it's block-scoped
                div.innerHTML = `<div style='color:blue; font-size:${index}px;'>Gujarat Technological University</div>`;
            }, 50 * index); // Delay increases with each iteration
        }
    });
</script>