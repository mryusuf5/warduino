<x-admin-layout>
    <div class="row p-3 gap-2">
        <div class="card col-xl-3 col-md-5 col-10 border border-primary">
            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                <h3>0</h3>
                <span class="text-muted">Graden</span>
            </div>
        </div>
        <div class="card col-xl-3 col-md-5 col-10 border border-primary">
            <div class="card-body text-center">
                <span class="text-muted">Lighten</span>
                <h3 id="lightsText">Uit</h3>
                <button class="btn btn-primary" id="LightsButton">Lighten aanzetten</button>
            </div>
        </div>
    </div>
</x-admin-layout>
<script>
    const lightsButton = document.querySelector("#lightsButton");
    const lightsText = document.querySelector("#lightsText");
    let lightsOnOff = false;

    lightsButton.addEventListener("click", () => {
        if(lightsOnOff)
        {
            lightsOnOff = false;
            lightsButton.textContent = "Lighten aanzetten";
            lightsText.textContent = "Uit";
        }
        else
        {
            lightsOnOff = true;
            lightsButton.textContent = "Lighten uitzetten";
            lightsText.textContent = "Aan";
        }
    })
</script>
