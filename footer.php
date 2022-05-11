
            <!-- footers -->
            <div class="footer">
                <div class="copyright">
                    <span>© Copyrights </span>
                    <a href="#">i8school</a>
                    <span> 2022. All rights reserved. Designed by </span>
                    <a href="#">VikashKumar</a>
                </div>

            </div>

        </div>
        <script>
            //MenuToggle
            let toggle = document.querySelector('.toggle');
            let navigation = document.querySelector('.navigation');
            let main = document.querySelector('.main');

            toggle.onclick = function () {
                navigation.classList.toggle('active');
                main.classList.toggle('active');
            }
        </script>

        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
        <script src="./my_charts.js"></script>
</body>

</html> 