
document.addEventListener("DOMContentLoaded", function () {
    let search_input = document.getElementById('map_location_input_search');
    let data_list_option_parent = document.getElementById('datalistOptions');
    let addedCities = [];


    search_input.addEventListener('keypress', async (e) => {

        let search_value = search_input.value;

        if (search_value.length > 0) {

            let jsonFilePath = '/webermelon.github.io/updated_data.json';
            fetch(jsonFilePath)
                .then(response => response.json())
                .then(jsonObject => {
                    data_list_option_parent.innerHTML = "";
                    addedCities.length = 0; // Clear the added cities array

                    jsonObject.forEach(element => {
                        let cityName = element['názov obce'];
                        if (cityName.includes(search_value) && !addedCities.includes(cityName)) {
                            var optionElement = document.createElement("option");
                            optionElement.value = cityName;
                            optionElement.textContent = cityName;

                            optionElement.setAttribute("data-lat", element["latitude"]);
                            optionElement.setAttribute("data-lon", element["longitude"]);
                            optionElement.setAttribute("data-ca", element["Ca"]);
                            optionElement.setAttribute("data-mg", element["Mg"]);
                            optionElement.setAttribute("data-pomer", element["Pomer"]);
                            optionElement.setAttribute("data-sucet", element["Súčet"]);
                            optionElement.setAttribute("data-id", element["číslo obce"]);

                            data_list_option_parent.appendChild(optionElement);
                            addedCities.push(cityName); // Add city to the added cities array
                        }
                    });

                })
        }
    })


    search_input.addEventListener('input', function () {
        let selectedOption = null;

        // Find the selected option within the datalist
        for (let i = 0; i < data_list_option_parent.options.length; i++) {
            if (data_list_option_parent.options[i].value === search_input.value) {
                selectedOption = data_list_option_parent.options[i];
                break;
            }
        }

        // If a selected option was found
        if (selectedOption) {
            // <option  data-ca="124.4" data-mg="32.4" data-pomer="4:1" data-sucet="156.8" data-id="544060">Babie</option>
            let mg = selectedOption.getAttribute("data-mg");
            let ca = selectedOption.getAttribute("data-ca");
            let pomer = selectedOption.getAttribute("data-pomer");

            pomer = pomer.split(':');
            mg_proportion = pomer[0];
            ca_proportion = pomer[1];

            let sucet = selectedOption.getAttribute("data-sucet");
            let recomendation_text = '';
            let recomendation_amount = '';
            if (sucet < 150) {
                recomendation_amount = '1,5L';
                recomendation_text = 'Very low mineral content in the water.<br> We recommend supplementing the drinking regime with at least ';
            } else if (sucet >= 150 || sucet < 350) {
                recomendation_amount = '1L';
                recomendation_text = 'Low mineral content in water. <br> We recommend supplementing the drinking regime with at least ';
            }
            else {
                recomendation_amount = '0.5L';
                recomendation_text = 'Average mineral content in water. We recommend supplementing the drinking regime with at least '
            }
            document.getElementById('recomendation_text').innerText = recomendation_text;
            document.getElementById('recomendation_amount').innerText = recomendation_amount;
            document.getElementById('proportion-ca').innerText = ca_proportion;
            document.getElementById('proportion-mg').innerText = mg_proportion;
            document.getElementById('Ca').innerText = ca;
            document.getElementById('Mg').innerText = mg;
 

            let marker_array = []; 
            marker_array['názov obce'] = selectedOption.value;
            marker_array["latitude"] = selectedOption.getAttribute("data-lat");
            marker_array["longitude"] = selectedOption.getAttribute("data-lon");
            marker_array["Mg"] = mg;
            marker_array["Ca"] = ca;
            marker_array["Pomer"] = pomer;
            generate_marker(marker_array);
       
        }
    });

});