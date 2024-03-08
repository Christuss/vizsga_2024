
function Form() {
    return (
        <form className="Form">
            <label class="form-label">Mit tettél a Földért?</label>
            <select class="form-select">
                <option>Válassz osztályt!</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>

            <select class="form-select">
                <option>Válassz tevékenységet!</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>

            <input type="submit" class="btn btn-success" value="Küld"></input>
        </form>
    );
}

export default Form;
