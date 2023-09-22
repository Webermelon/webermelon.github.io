document.addEventListener("DOMContentLoaded", function () {
  let search_btn = document.getElementById("search-btn");
  let search_input = document.getElementById("map_location_input_search");
  let data_list_option_parent = document.querySelector("#datalistOptions select");
  let data_list_option_parent_childs = document.querySelectorAll("#datalistOptions select options");
  let addedCities = [];
 

  data_list_option_parent.addEventListener('input',()=>{
 
    search_input.value = data_list_option_parent.value ; 
    data_list_option_parent.style.display = "none";
  })
 
  search_input.addEventListener("input", async (e) => { 
    datat();
  });

  search_from.addEventListener("submit", function (event) {
    event.preventDefault();
    datat();
  });
  function datat() {

    let search_value = search_input.value;
    if (search_value.length > 0) {
      let jsonFilePath = "updated_data.json";
      fetch(jsonFilePath)
        .then((response) => response.json())
        .then((jsonObject) => {
          data_list_option_parent.innerHTML = "";
          addedCities.length = 0; // Clear the added cities array
          jsonObject.forEach((element) => {
            let cityName = element["názov obce"];
            let temp_cityName = cityName;
            search_value = search_value.toLowerCase();

            let normalizedString = temp_cityName.normalize("NFD");
            let search_value_normalizedString = search_value.normalize("NFD");

            // Remove diacritic marks (accented characters)
            let stringWithoutSpecialChar = normalizedString.replace(/[\u0300-\u036f]/g, '');
            let search_value_stringWithoutSpecialChar = search_value_normalizedString.replace(/[\u0300-\u036f]/g, '');
            temp_cityName = stringWithoutSpecialChar.toLowerCase()
            search_value = search_value_stringWithoutSpecialChar.toLowerCase()
 
            if (
              temp_cityName.includes(search_value) &&
              !addedCities.includes(cityName)
            ) {
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
         
        });
       
    }

    // update_select_value();
  }
  search_btn.addEventListener("click", function () {
    let selectedOption = null;
    empty_database_message.style.display = 'none';
    // Find the selected option within the datalist
    for (let i = 0; i < data_list_option_parent.options.length; i++) {

      let temp_data_list_option_parent = data_list_option_parent.options[i].value.toLowerCase();
      let temp_search_input = data_list_option_parent.value.toLowerCase()

      if (temp_data_list_option_parent === temp_search_input) {
        selectedOption = data_list_option_parent.options[i];
        break;
      }

    } 
    var elements = document.querySelectorAll(".data-box");

    // Loop through the elements and set their display property to "block"
    elements.forEach(function (element) {
      element.style.display = "block";
    });

    // Get all elements with the class "leaflet-marker-icon"
    var elementsToDelete = document.querySelectorAll(".leaflet-marker-icon");

    // Loop through the elements and remove each one
    elementsToDelete.forEach(function (element) {
      element.remove();
    });

    console.log(selectedOption);
    // If a selected option was found
    if (selectedOption) {
      // <option  data-ca="124.4" data-mg="32.4" data-pomer="4:1" data-sucet="156.8" data-id="544060">Babie</option>
      let mg = selectedOption.getAttribute("data-mg");
      let ca = selectedOption.getAttribute("data-ca");
      let pomer = selectedOption.getAttribute("data-pomer");
      let recomended_ca_amount = 1200;
      let recomended_mg_amount = 400;

      let ca_percentage = ca * 2;
      let mg_percentage = mg * 2;

      ca_percentage = ca_percentage / recomended_ca_amount * 100;
      mg_percentage = mg_percentage / recomended_mg_amount * 100;




      pomer = pomer.split(":");
      mg_proportion = pomer[1];
      ca_proportion = pomer[0];

      let sucet = selectedOption.getAttribute("data-sucet");
      let recomendation_text = "";
      let recomendation_amount = "";
      let bg_color = '';

      if (sucet < 80) {
        recomendation_amount = "1,5L";
        recomendation_text =
          "<b>Veľmi nízky obsah minerálov vo vode.</b><br>Odporúčame dopĺňať pitný režim o minimálne";
        recomendation_text = 'Veľmi nízky';
        bg_color = '#A70000';
      } else if (sucet >= 80 && sucet < 200) {
        recomendation_amount = "1L";
        recomendation_text =
          "<b>Nízky obsah minerálov vo vode.</b><br>Odporúčame dopĺňať pitný režim o minimálne";
        
        recomendation_text = 'Podpriemerný';
        bg_color = '#FF0000';

      } else {
        recomendation_amount = "0.5L";
        recomendation_text =
          "<b>Priemerný obsah minerálov vo vode.</b><br>Odporúčame dopĺňať pitný režim o minimálne";
        
        recomendation_text = 'Priemerný';
        bg_color = '#FF5252';

      }
      document.getElementById("recomendation_text").innerHTML =
        recomendation_text;
        document.getElementById("recomendation_text").style.backgroundColor = bg_color;
      // document.getElementById("recomendation_amount").innerText =
      //   recomendation_amount;
      document.getElementById("proportion-ca").innerText = Math.round(ca_percentage) + '%';
      document.getElementById("proportion-mg").innerText = Math.round(mg_percentage) + '%';
      document.getElementById("Ca").innerText = ca;
      document.getElementById("Mg").innerText = mg;

      // console.log(selectedOption.getAttribute("data-lat"));
      let marker_array = [];
      marker_array["názov obce"] = selectedOption.value;
      marker_array["latitude"] = selectedOption.getAttribute("data-lat");
      marker_array["longitude"] = selectedOption.getAttribute("data-lon");
      marker_array["Mg"] = mg;
      marker_array["Ca"] = ca;
      marker_array["Pomer"] = pomer;
      generate_marker(marker_array);
    } else {
      elements.forEach(function (element) {
        element.style.display = "none";
      });
      empty_database_message.style.display = 'block';


    }
  });
});
