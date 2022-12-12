            <div class="form__container">
                <div class="form__header">
                    FORM
                </div>
                <form class="input__wrapper" action="">

                    <div class="form__input">
                        <label for="text"> TEXT</label>

                        <input type="text" name="" id="text" placeholder="Input your text...">
                    </div>

                    <div class="form__input">
                        <label for="password"> PASSWORD</label>

                        <input type="password" name="" id="password" placeholder="Input your password...">
                    </div>

                    <div class="form__input--upload">
                        <label for="file"> UPLOAD FILE </label>

                        <input type="file" name="" id="file">
                    </div>

                    <div class="form__input--dropdown"> 
                        <label for="dropdown"> DROP DOWN </label>

                        <input type="text" name="dropdown" placeholder="Pilih item" list="listoption">
                        <datalist id="listoption">
                            <option value="A">
                            <option value="B">
                            <option value="C">
                        </datalist>
                    </div>
                    <div class="form__input--dropdowncust">
                        <button onclick="dropdownFunc()" type="button" class="form__input--dropbtn">Pilih Item</button>
                        <div id="myDropdown" class="form__input--dropdowncontent">
                            <a href="#">Option 1</a>
                            <a href="#">Option 2</a>
                            <a href="#">Option 3</a>
                        </div>
                    </div>

                    <div class="form__input--date">
                        <label for="date"> DATE </label>

                        <input type="date" name="" id="date">
                    </div>

                    <div class="form__input--option">
                        <label for="radio"> OPTION </label>

                        <div class="form__input--radio">
                            <input type="radio" name="radio" id="radio" value="A"> A
                            <input type="radio" name="radio" id="radio" value="B"> B
                            <input type="radio" name="radio" id="radio" value="C"> C
                        </div>
                    </div>

                    <div class="form__input--option">
                        <label for="checkbox"> CHECKBOX </label>

                        <div class="form__input--checkbox">
                            <input type="checkbox" name="" id="checkbox" > A
                            <input type="checkbox" name="" id="checkbox" > B
                            <input type="checkbox" name="" id="checkbox" > C
                        </div>
                    </div>

                    <div class="form__input">
                        <label for="switch"> TOGGLE SWITCH </label>
                        <label class="form__input--switch">
                            <input type="checkbox">
                            <span class="form__input--switchslider"></span>
                        </label>

                        <label class="form__input--switch">
                            <input type="checkbox" checked>
                            <span class="form__input--switchslider round"></span>
                        </label>
                    </div>

                    <div class="form__input">
                        <label for="textarea"> TEXT AREA </label>

                        <textarea name="" id="textarea" cols="30" rows="10">
                        </textarea>
                    </div>

                    <div class="form__input">
                        <label for="textarea"> TEXT AREA </label>

                        <textarea class="form__textarea--disable" name="" id="textarea" cols="30" rows="10">
                        </textarea>
                    </div>

                    <div class="form__input--slider">
                        <label for="slider"> SLIDER </label>

                        <input type="range" name="slider" id="slider">
                        <input type="range" min="1" max="100" value="50" class="form__input--custslider" id="myRange">
                    </div>

                    <div class="form__input--button">
                        <button class="form__button--cancel">Cancel</button>
                        <button class="form__button--confirm">Confirm</button>
                    </div>

                </form>
            </div>
        </div>