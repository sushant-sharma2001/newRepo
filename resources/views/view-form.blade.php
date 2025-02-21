<div>
    <!-- Act only according to that maxim whereby you can, at the same time, will that it should become a universal law. - Immanuel Kant -->
    <h2>this is form</h2>
    <form action="adduser" method="post">
        @csrf
        <div class="input-wrapper">
            <input type="text" placeholder="enter your name" name="username">
        </div>
        <div class="input-wrapper">
            <input type="email" placeholder="enter your email" name="email">
        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="enter your city" name="city">
        </div>
        <div>
            <h4>user skills</h4>
            <input type="checkbox" name="skills[]" value="c" id="c">
            <label for="c">C</label><br>
            <input type="checkbox" name="skills[]" value="python" id="python">
            <label for="python">Python</label><br>
            <input type="checkbox" name="skills[]" value="javaScript" id="js">
            <label for="js">Java Script</label><br>
            <input type="checkbox" name="skills[]" value="php" id="php">
            <label for="php">PHP</label><br>
        </div>
        <div>
            <h4>user gender</h4>
            <label for="male">male</label>
            <input type="radio" id="male" name="gender" value="male">
            <label for="female">female</label>
            <input type="radio" id="female" name="gender" value="female">
        </div>
        <div>
            <h4>state</h4>
            <select name="state">
                <option value="himachal">HP</option>
                <option value="haryana">HR</option>
                <option value="punjab">PB</option>
                <option value="gujrat">GJ</option>
                <option value="jammu">JK</option>
            </select>
        </div>
        <div class="input-wrapper">
            <button>submit</button>

        </div>
    </form>
</div>
<style>
    input[type="text"],
    input[type="email"]
     {
        border: 1px solid;
        height: 35px;
        width: 200px;
        border-radius: 5px;
    }

    .input-wrapper {
        margin: 10px;
    }

    button {
        color: black;
        background-color: lightgreen;
        border-radius: 3px;
        cursor: pointer;
    }

    button:hover {
        background-color: white;
        color: green;
    }
</style>