<fieldset class="location-init">
    <input id="lat" name="lat" type="hidden" data-init="{{ $geo_location->lat }}" />
    <input id="lng" name="lng" type="hidden" data-init="{{ $geo_location->lng }}" />
    <input id="title" name="geo-title" type="hidden" data-init="{{ $geo_location->address }}" />
</fieldset>