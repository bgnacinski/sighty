<?= $this->extend("templates/main"); ?>

<?= $this->section("content"); ?>
<form class="text-center" action="/places/result" method="get">
    <div class="form-group" id="latidute">
        <label for="latitude">Latitude:</label>
        <input id="latitude" name="latitude" type="text" pattern="^-?([0-8]?[0-9]|90)(\.[0-9]{1,10})$" placeholder="Latitude">
    </div>
    <div class="form-group" id="longitude">
        <label for="longitude">Longitude:</label>
        <input id="longitude" name="longitude" type="text" pattern="^-?([0-9]{1,2}|1[0-7][0-9]|180)(\.[0-9]{1,10})$" placeholder="Longitude">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?= $this->endSection(); ?>