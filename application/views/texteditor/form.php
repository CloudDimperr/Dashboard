            <div class="form__container">
                <div class="form__header">
                    FORM
                </div>
                <form class="input__wrapper" action="">

                    <!-- Text -->
                    <div class="form__input">
                        <label for="text"> TEXT</label>

                        <input type="text" name="" id="text" placeholder="Input your text...">
                    </div>

                    <!-- File -->
                    <div class="form__input">
                        <label for="file"> FILE </label>

                        <input type="file" name="" id="file">
                    </div>

                    <!-- Drop down -->
                    <div class="form__input--dropdown"> 
                        <label for="dropdown"> DROP DOWN </label>

                        <input type="text" name="dropdown" placeholder="Pilih item" list="listoption">
                        <datalist id="listoption">
                        <option value="A">
                        <option value="B">
                        </datalist>
                    </div>

                    <!-- Date -->
                    <div class="form__input--date">
                        <label for="date"> DATE </label>

                        <input type="date" name="" id="date">
                    </div>

                    <!-- Option -->
                    <div class="form__input">
                        <label for="option"> Option </label>

                        <div class="form__input--radio">
                            <input type="radio" name="radio" id="option" value="A"> A
                            <input type="radio" name="radio" id="option" value="B"> B
                            <input type="radio" name="radio" id="option" value="C"> C
                        </div>
                    </div>

                    <!-- checkbox -->
                    <div class="form__input">
                        <label for="checkbox"> CHECKBOX </label>

                        <div class="form__input--checkbox">
                            <input type="checkbox" name="" id="checkbox" > A
                            <input type="checkbox" name="" id="checkbox" > B
                            <input type="checkbox" name="" id="checkbox" > C
                        </div>
                    </div>

                    <!-- toggle -->
                    <div class="form__input">
                        <label for="">TOGGLE</label>
                        input:toggle
                    </div>

                    <!-- Textarea -->
                    <div class="form__input">
                        <label for="textarea"> TEXT AREA </label>

                        <textarea name="" id="textarea" cols="30" rows="10">
                        </textarea>
                    </div>

                    <!-- Textarea resize disable -->
                    <div class="form__input">
                        <label for="textarea"> TEXT AREA </label>

                        <textarea class="form__textarea--disable" name="" id="textarea" cols="30" rows="10">
                        </textarea>
                    </div>

                    <!-- slider -->
                    <div class="form__input">
                        <label for="slider"> SLIDER </label>

                        <input type="range" name="" id="slider">
                    </div>

                    <div class="form__input--button">
                        <button class="form__button--cancel">Cancel</button>
                        <button class="form__button--confirm">Confirm</button>
                    </div>

                </form>
            </div>
        </div>