<template>
<div class="mb-4">
        <div class="carta-header p-3" >
            <h5>Mapa</h5>
        </div>
        <div class="carta-body p-3">
            <h5 class="carta-title">Localización de la llamada</h5>
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe
                        width="100%"
                        height="250"
                        id="gmap_canvas"
                        src="https://maps.google.com/maps?q=urquinaona,%2010,%20%20Barcelona&t=&z=13&ie=UTF8&iwloc=&output=embed"
                        frameborder="0"
                        scrolling="no"
                        marginheight="0"
                        marginwidth="0"
                    ></iframe
                    ><a href="https://fmovies-online.net"></a><br />
                    <a href="https://www.embedgooglemap.net"></a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    setup() {},
};
</script>

<style lang="scss" scoped>
.carta-header {
    background-color: #FFE64E;
    border-radius: 25px 25px 0px 0px;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
}
.carta-body {
    background-color: white;
    border-radius: 0px 0px 25px 25px;
    box-shadow: 0px 15px 14px 4px rgba(0, 0, 0, 0.12);
}
</style>
