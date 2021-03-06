<?php

/*
 * The MIT License
 *
 * Copyright 2015 Juan Francisco Rodríguez.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

class Country {

    public static $_ENUM = array(
	"en" => array(
	    "AF" => "Afghanistan",
	    "AL" => "Albania",
	    "DZ" => "Algeria",
	    "AS" => "American Samoa",
	    "AD" => "Andorra",
	    "AO" => "Angola",
	    "AI" => "Anguilla",
	    "AQ" => "Antarctica",
	    "AG" => "Antigua and Barbuda",
	    "AR" => "Argentina",
	    "AM" => "Armenia",
	    "AW" => "Aruba",
	    "AU" => "Australia",
	    "AT" => "Austria",
	    "AZ" => "Azerbaijan",
	    "BS" => "Bahamas",
	    "BH" => "Bahrain",
	    "BD" => "Bangladesh",
	    "BB" => "Barbados",
	    "BY" => "Belarus",
	    "BE" => "Belgium",
	    "BZ" => "Belize",
	    "BJ" => "Benin",
	    "BM" => "Bermuda",
	    "BT" => "Bhutan",
	    "BO" => "Bolivia",
	    "BA" => "Bosnia and Herzegovina",
	    "BW" => "Botswana",
	    "BV" => "Bouvet Island",
	    "BR" => "Brazil",
	    "BQ" => "British Antarctic Territory",
	    "IO" => "British Indian Ocean Territory",
	    "VG" => "British Virgin Islands",
	    "BN" => "Brunei",
	    "BG" => "Bulgaria",
	    "BF" => "Burkina Faso",
	    "BI" => "Burundi",
	    "KH" => "Cambodia",
	    "CM" => "Cameroon",
	    "CA" => "Canada",
	    "CT" => "Canton and Enderbury Islands",
	    "CV" => "Cape Verde",
	    "KY" => "Cayman Islands",
	    "CF" => "Central African Republic",
	    "TD" => "Chad",
	    "CL" => "Chile",
	    "CN" => "China",
	    "CX" => "Christmas Island",
	    "CC" => "Cocos [Keeling] Islands",
	    "CO" => "Colombia",
	    "KM" => "Comoros",
	    "CG" => "Congo - Brazzaville",
	    "CD" => "Congo - Kinshasa",
	    "CK" => "Cook Islands",
	    "CR" => "Costa Rica",
	    "HR" => "Croatia",
	    "CU" => "Cuba",
	    "CY" => "Cyprus",
	    "CZ" => "Czech Republic",
	    "CI" => "Côte d’Ivoire",
	    "DK" => "Denmark",
	    "DJ" => "Djibouti",
	    "DM" => "Dominica",
	    "DO" => "Dominican Republic",
	    "NQ" => "Dronning Maud Land",
	    "DD" => "East Germany",
	    "EC" => "Ecuador",
	    "EG" => "Egypt",
	    "SV" => "El Salvador",
	    "GQ" => "Equatorial Guinea",
	    "ER" => "Eritrea",
	    "EE" => "Estonia",
	    "ET" => "Ethiopia",
	    "FK" => "Falkland Islands",
	    "FO" => "Faroe Islands",
	    "FJ" => "Fiji",
	    "FI" => "Finland",
	    "FR" => "France",
	    "GF" => "French Guiana",
	    "PF" => "French Polynesia",
	    "TF" => "French Southern Territories",
	    "FQ" => "French Southern and Antarctic Territories",
	    "GA" => "Gabon",
	    "GM" => "Gambia",
	    "GE" => "Georgia",
	    "DE" => "Germany",
	    "GH" => "Ghana",
	    "GI" => "Gibraltar",
	    "GR" => "Greece",
	    "GL" => "Greenland",
	    "GD" => "Grenada",
	    "GP" => "Guadeloupe",
	    "GU" => "Guam",
	    "GT" => "Guatemala",
	    "GG" => "Guernsey",
	    "GN" => "Guinea",
	    "GW" => "Guinea-Bissau",
	    "GY" => "Guyana",
	    "HT" => "Haiti",
	    "HM" => "Heard Island and McDonald Islands",
	    "HN" => "Honduras",
	    "HK" => "Hong Kong SAR China",
	    "HU" => "Hungary",
	    "IS" => "Iceland",
	    "IN" => "India",
	    "ID" => "Indonesia",
	    "IR" => "Iran",
	    "IQ" => "Iraq",
	    "IE" => "Ireland",
	    "IM" => "Isle of Man",
	    "IL" => "Israel",
	    "IT" => "Italy",
	    "JM" => "Jamaica",
	    "JP" => "Japan",
	    "JE" => "Jersey",
	    "JT" => "Johnston Island",
	    "JO" => "Jordan",
	    "KZ" => "Kazakhstan",
	    "KE" => "Kenya",
	    "KI" => "Kiribati",
	    "KW" => "Kuwait",
	    "KG" => "Kyrgyzstan",
	    "LA" => "Laos",
	    "LV" => "Latvia",
	    "LB" => "Lebanon",
	    "LS" => "Lesotho",
	    "LR" => "Liberia",
	    "LY" => "Libya",
	    "LI" => "Liechtenstein",
	    "LT" => "Lithuania",
	    "LU" => "Luxembourg",
	    "MO" => "Macau SAR China",
	    "MK" => "Macedonia",
	    "MG" => "Madagascar",
	    "MW" => "Malawi",
	    "MY" => "Malaysia",
	    "MV" => "Maldives",
	    "ML" => "Mali",
	    "MT" => "Malta",
	    "MH" => "Marshall Islands",
	    "MQ" => "Martinique",
	    "MR" => "Mauritania",
	    "MU" => "Mauritius",
	    "YT" => "Mayotte",
	    "FX" => "Metropolitan France",
	    "MX" => "Mexico",
	    "FM" => "Micronesia",
	    "MI" => "Midway Islands",
	    "MD" => "Moldova",
	    "MC" => "Monaco",
	    "MN" => "Mongolia",
	    "ME" => "Montenegro",
	    "MS" => "Montserrat",
	    "MA" => "Morocco",
	    "MZ" => "Mozambique",
	    "MM" => "Myanmar [Burma]",
	    "NA" => "Namibia",
	    "NR" => "Nauru",
	    "NP" => "Nepal",
	    "NL" => "Netherlands",
	    "AN" => "Netherlands Antilles",
	    "NT" => "Neutral Zone",
	    "NC" => "New Caledonia",
	    "NZ" => "New Zealand",
	    "NI" => "Nicaragua",
	    "NE" => "Niger",
	    "NG" => "Nigeria",
	    "NU" => "Niue",
	    "NF" => "Norfolk Island",
	    "KP" => "North Korea",
	    "VD" => "North Vietnam",
	    "MP" => "Northern Mariana Islands",
	    "NO" => "Norway",
	    "OM" => "Oman",
	    "PC" => "Pacific Islands Trust Territory",
	    "PK" => "Pakistan",
	    "PW" => "Palau",
	    "PS" => "Palestinian Territories",
	    "PA" => "Panama",
	    "PZ" => "Panama Canal Zone",
	    "PG" => "Papua New Guinea",
	    "PY" => "Paraguay",
	    "YD" => "People's Democratic Republic of Yemen",
	    "PE" => "Peru",
	    "PH" => "Philippines",
	    "PN" => "Pitcairn Islands",
	    "PL" => "Poland",
	    "PT" => "Portugal",
	    "PR" => "Puerto Rico",
	    "QA" => "Qatar",
	    "RO" => "Romania",
	    "RU" => "Russia",
	    "RW" => "Rwanda",
	    "RE" => "Réunion",
	    "BL" => "Saint Barthélemy",
	    "SH" => "Saint Helena",
	    "KN" => "Saint Kitts and Nevis",
	    "LC" => "Saint Lucia",
	    "MF" => "Saint Martin",
	    "PM" => "Saint Pierre and Miquelon",
	    "VC" => "Saint Vincent and the Grenadines",
	    "WS" => "Samoa",
	    "SM" => "San Marino",
	    "SA" => "Saudi Arabia",
	    "SN" => "Senegal",
	    "RS" => "Serbia",
	    "CS" => "Serbia and Montenegro",
	    "SC" => "Seychelles",
	    "SL" => "Sierra Leone",
	    "SG" => "Singapore",
	    "SK" => "Slovakia",
	    "SI" => "Slovenia",
	    "SB" => "Solomon Islands",
	    "SO" => "Somalia",
	    "ZA" => "South Africa",
	    "GS" => "South Georgia and the South Sandwich Islands",
	    "KR" => "South Korea",
	    "ES" => "Spain",
	    "LK" => "Sri Lanka",
	    "SD" => "Sudan",
	    "SR" => "Suriname",
	    "SJ" => "Svalbard and Jan Mayen",
	    "SZ" => "Swaziland",
	    "SE" => "Sweden",
	    "CH" => "Switzerland",
	    "SY" => "Syria",
	    "ST" => "São Tomé and Príncipe",
	    "TW" => "Taiwan",
	    "TJ" => "Tajikistan",
	    "TZ" => "Tanzania",
	    "TH" => "Thailand",
	    "TL" => "Timor-Leste",
	    "TG" => "Togo",
	    "TK" => "Tokelau",
	    "TO" => "Tonga",
	    "TT" => "Trinidad and Tobago",
	    "TN" => "Tunisia",
	    "TR" => "Turkey",
	    "TM" => "Turkmenistan",
	    "TC" => "Turks and Caicos Islands",
	    "TV" => "Tuvalu",
	    "UM" => "U.S. Minor Outlying Islands",
	    "PU" => "U.S. Miscellaneous Pacific Islands",
	    "VI" => "U.S. Virgin Islands",
	    "UG" => "Uganda",
	    "UA" => "Ukraine",
	    "SU" => "Union of Soviet Socialist Republics",
	    "AE" => "United Arab Emirates",
	    "GB" => "United Kingdom",
	    "US" => "United States",
	    "ZZ" => "Unknown or Invalid Region",
	    "UY" => "Uruguay",
	    "UZ" => "Uzbekistan",
	    "VU" => "Vanuatu",
	    "VA" => "Vatican City",
	    "VE" => "Venezuela",
	    "VN" => "Vietnam",
	    "WK" => "Wake Island",
	    "WF" => "Wallis and Futuna",
	    "EH" => "Western Sahara",
	    "YE" => "Yemen",
	    "ZM" => "Zambia",
	    "ZW" => "Zimbabwe",
	    "AX" => "Åland Islands"),
	"es" => array(
	    "AF" => "Afganistán",
	    "AL" => "Albania",
	    "DE" => "Alemania",
	    "AD" => "Andorra",
	    "AO" => "Angola",
	    "AI" => "Anguila",
	    "AG" => "Antigua y Barbuda",
	    "AN" => "Antillas Neerlandesas",
	    "AQ" => "Antártida",
	    "SA" => "Arabia Saudí",
	    "DZ" => "Argelia",
	    "AR" => "Argentina",
	    "AM" => "Armenia",
	    "AW" => "Aruba",
	    "AU" => "Australia",
	    "AT" => "Austria",
	    "AZ" => "Azerbaiyán",
	    "BS" => "Bahamas",
	    "BH" => "Bahréin",
	    "BD" => "Bangladesh",
	    "BB" => "Barbados",
	    "BZ" => "Belice",
	    "BJ" => "Benín",
	    "BM" => "Bermudas",
	    "BY" => "Bielorrusia",
	    "BO" => "Bolivia",
	    "BA" => "Bosnia-Herzegovina",
	    "BW" => "Botsuana",
	    "BR" => "Brasil",
	    "BN" => "Brunéi",
	    "BG" => "Bulgaria",
	    "BF" => "Burkina Faso",
	    "BI" => "Burundi",
	    "BT" => "Bután",
	    "BE" => "Bélgica",
	    "CV" => "Cabo Verde",
	    "KH" => "Camboya",
	    "CM" => "Camerún",
	    "CA" => "Canadá",
	    "TD" => "Chad",
	    "CL" => "Chile",
	    "CN" => "China",
	    "CY" => "Chipre",
	    "VA" => "Ciudad del Vaticano",
	    "CO" => "Colombia",
	    "KM" => "Comoras",
	    "CG" => "Congo",
	    "KP" => "Corea del Norte",
	    "KR" => "Corea del Sur",
	    "CR" => "Costa Rica",
	    "CI" => "Costa de Marfil",
	    "HR" => "Croacia",
	    "CU" => "Cuba",
	    "DK" => "Dinamarca",
	    "DM" => "Dominica",
	    "EC" => "Ecuador",
	    "EG" => "Egipto",
	    "SV" => "El Salvador",
	    "AE" => "Emiratos Árabes Unidos",
	    "ER" => "Eritrea",
	    "SK" => "Eslovaquia",
	    "SI" => "Eslovenia",
	    "ES" => "España",
	    "US" => "Estados Unidos",
	    "EE" => "Estonia",
	    "ET" => "Etiopía",
	    "PH" => "Filipinas",
	    "FI" => "Finlandia",
	    "FJ" => "Fiyi",
	    "FR" => "Francia",
	    "GA" => "Gabón",
	    "GM" => "Gambia",
	    "GE" => "Georgia",
	    "GH" => "Ghana",
	    "GI" => "Gibraltar",
	    "GD" => "Granada",
	    "GR" => "Grecia",
	    "GL" => "Groenlandia",
	    "GP" => "Guadalupe",
	    "GU" => "Guam",
	    "GT" => "Guatemala",
	    "GF" => "Guayana Francesa",
	    "GG" => "Guernsey",
	    "GN" => "Guinea",
	    "GQ" => "Guinea Ecuatorial",
	    "GW" => "Guinea-Bissau",
	    "GY" => "Guyana",
	    "HT" => "Haití",
	    "HN" => "Honduras",
	    "HU" => "Hungría",
	    "IN" => "India",
	    "ID" => "Indonesia",
	    "IQ" => "Iraq",
	    "IE" => "Irlanda",
	    "IR" => "Irán",
	    "BV" => "Isla Bouvet",
	    "CX" => "Isla Christmas",
	    "NU" => "Isla Niue",
	    "NF" => "Isla Norfolk",
	    "IM" => "Isla de Man",
	    "IS" => "Islandia",
	    "KY" => "Islas Caimán",
	    "CC" => "Islas Cocos",
	    "CK" => "Islas Cook",
	    "FO" => "Islas Feroe",
	    "GS" => "Islas Georgia del Sur y Sandwich del Sur",
	    "HM" => "Islas Heard y McDonald",
	    "FK" => "Islas Malvinas",
	    "MP" => "Islas Marianas del Norte",
	    "MH" => "Islas Marshall",
	    "SB" => "Islas Salomón",
	    "TC" => "Islas Turcas y Caicos",
	    "VG" => "Islas Vírgenes Británicas",
	    "VI" => "Islas Vírgenes de los Estados Unidos",
	    "UM" => "Islas menores alejadas de los Estados Unidos",
	    "AX" => "Islas Åland",
	    "IL" => "Israel",
	    "IT" => "Italia",
	    "JM" => "Jamaica",
	    "JP" => "Japón",
	    "JE" => "Jersey",
	    "JO" => "Jordania",
	    "KZ" => "Kazajistán",
	    "KE" => "Kenia",
	    "KG" => "Kirguistán",
	    "KI" => "Kiribati",
	    "KW" => "Kuwait",
	    "LA" => "Laos",
	    "LS" => "Lesoto",
	    "LV" => "Letonia",
	    "LR" => "Liberia",
	    "LY" => "Libia",
	    "LI" => "Liechtenstein",
	    "LT" => "Lituania",
	    "LU" => "Luxemburgo",
	    "LB" => "Líbano",
	    "MK" => "Macedonia",
	    "MG" => "Madagascar",
	    "MY" => "Malasia",
	    "MW" => "Malaui",
	    "MV" => "Maldivas",
	    "ML" => "Mali",
	    "MT" => "Malta",
	    "MA" => "Marruecos",
	    "MQ" => "Martinica",
	    "MU" => "Mauricio",
	    "MR" => "Mauritania",
	    "YT" => "Mayotte",
	    "FM" => "Micronesia",
	    "MD" => "Moldavia",
	    "MN" => "Mongolia",
	    "ME" => "Montenegro",
	    "MS" => "Montserrat",
	    "MZ" => "Mozambique",
	    "MM" => "Myanmar",
	    "MX" => "México",
	    "MC" => "Mónaco",
	    "NA" => "Namibia",
	    "NR" => "Nauru",
	    "NP" => "Nepal",
	    "NI" => "Nicaragua",
	    "NG" => "Nigeria",
	    "NO" => "Noruega",
	    "NC" => "Nueva Caledonia",
	    "NZ" => "Nueva Zelanda",
	    "NE" => "Níger",
	    "OM" => "Omán",
	    "PK" => "Pakistán",
	    "PW" => "Palau",
	    "PS" => "Palestina",
	    "PA" => "Panamá",
	    "PG" => "Papúa Nueva Guinea",
	    "PY" => "Paraguay",
	    "NL" => "Países Bajos",
	    "PE" => "Perú",
	    "PN" => "Pitcairn",
	    "PF" => "Polinesia Francesa",
	    "PL" => "Polonia",
	    "PT" => "Portugal",
	    "PR" => "Puerto Rico",
	    "QA" => "Qatar",
	    "HK" => "Región Administrativa Especial de Hong Kong de la República Popular China",
	    "MO" => "Región Administrativa Especial de Macao de la República Popular China",
	    "ZZ" => "Región desconocida o no válida",
	    "GB" => "Reino Unido",
	    "CF" => "República Centroafricana",
	    "CZ" => "República Checa",
	    "CD" => "República Democrática del Congo",
	    "DO" => "República Dominicana",
	    "RE" => "Reunión",
	    "RW" => "Ruanda",
	    "RO" => "Rumanía",
	    "RU" => "Rusia",
	    "WS" => "Samoa",
	    "AS" => "Samoa Americana",
	    "BL" => "San Bartolomé",
	    "KN" => "San Cristóbal y Nieves",
	    "SM" => "San Marino",
	    "MF" => "San Martín",
	    "PM" => "San Pedro y Miquelón",
	    "VC" => "San Vicente y las Granadinas",
	    "SH" => "Santa Elena",
	    "LC" => "Santa Lucía",
	    "ST" => "Santo Tomé y Príncipe",
	    "SN" => "Senegal",
	    "RS" => "Serbia",
	    "CS" => "Serbia y Montenegro",
	    "SC" => "Seychelles",
	    "SL" => "Sierra Leona",
	    "SG" => "Singapur",
	    "SY" => "Siria",
	    "SO" => "Somalia",
	    "LK" => "Sri Lanka",
	    "SZ" => "Suazilandia",
	    "ZA" => "Sudáfrica",
	    "SD" => "Sudán",
	    "SE" => "Suecia",
	    "CH" => "Suiza",
	    "SR" => "Surinam",
	    "SJ" => "Svalbard y Jan Mayen",
	    "EH" => "Sáhara Occidental",
	    "TH" => "Tailandia",
	    "TW" => "Taiwán",
	    "TZ" => "Tanzania",
	    "TJ" => "Tayikistán",
	    "IO" => "Territorio Británico del Océano Índico",
	    "TF" => "Territorios Australes Franceses",
	    "TL" => "Timor Oriental",
	    "TG" => "Togo",
	    "TK" => "Tokelau",
	    "TO" => "Tonga",
	    "TT" => "Trinidad y Tobago",
	    "TM" => "Turkmenistán",
	    "TR" => "Turquía",
	    "TV" => "Tuvalu",
	    "TN" => "Túnez",
	    "UA" => "Ucrania",
	    "UG" => "Uganda",
	    "UY" => "Uruguay",
	    "UZ" => "Uzbekistán",
	    "VU" => "Vanuatu",
	    "VE" => "Venezuela",
	    "VN" => "Vietnam",
	    "WF" => "Wallis y Futuna",
	    "YE" => "Yemen",
	    "DJ" => "Yibuti",
	    "ZM" => "Zambia",
	    "ZW" => "Zimbabue",),
	"pt" => array(
	    "AF" => "Afeganistão",
	    "AL" => "Albânia",
	    "DE" => "Alemanha",
	    "AD" => "Andorra",
	    "AO" => "Angola",
	    "AI" => "Anguilla",
	    "AN" => "Antilhas Holandesas",
	    "AQ" => "Antártida",
	    "AG" => "Antígua e Barbuda",
	    "AR" => "Argentina",
	    "DZ" => "Argélia",
	    "AM" => "Armênia",
	    "AW" => "Aruba",
	    "SA" => "Arábia Saudita",
	    "AU" => "Austrália",
	    "AZ" => "Azerbaijão",
	    "BS" => "Bahamas",
	    "BH" => "Bahrain",
	    "BD" => "Bangladesh",
	    "BB" => "Barbados",
	    "BY" => "Belarus",
	    "BZ" => "Belize",
	    "BJ" => "Benin",
	    "BM" => "Bermudas",
	    "BO" => "Bolívia",
	    "BW" => "Botsuana",
	    "BR" => "Brasil",
	    "BN" => "Brunei",
	    "BG" => "Bulgária",
	    "BF" => "Burquina Faso",
	    "BI" => "Burundi",
	    "BT" => "Butão",
	    "BE" => "Bélgica",
	    "BA" => "Bósnia-Herzegovina",
	    "CV" => "Cabo Verde",
	    "KH" => "Camboja",
	    "CA" => "Canadá",
	    "KZ" => "Casaquistão",
	    "QA" => "Catar",
	    "TD" => "Chade",
	    "CL" => "Chile",
	    "CN" => "China",
	    "CY" => "Chipre",
	    "SG" => "Cingapura",
	    "CO" => "Colômbia",
	    "KM" => "Comores",
	    "CG" => "Congo",
	    "CD" => "Congo-Kinshasa",
	    "KP" => "Coreia do Norte",
	    "KR" => "Coreia do Sul",
	    "CR" => "Costa Rica",
	    "CI" => "Costa do Marfim",
	    "HR" => "Croácia",
	    "CU" => "Cuba",
	    "DK" => "Dinamarca",
	    "DJ" => "Djibuti",
	    "DM" => "Dominica",
	    "EG" => "Egito",
	    "SV" => "El Salvador",
	    "AE" => "Emirados Árabes Unidos",
	    "EC" => "Equador",
	    "ER" => "Eritreia",
	    "SK" => "Eslováquia",
	    "SI" => "Eslovênia",
	    "ES" => "Espanha",
	    "US" => "Estados Unidos",
	    "EE" => "Estônia",
	    "ET" => "Etiópia",
	    "FJ" => "Fiji",
	    "PH" => "Filipinas",
	    "FI" => "Finlândia",
	    "FR" => "França",
	    "GA" => "Gabão",
	    "GH" => "Gana",
	    "GE" => "Geórgia",
	    "GS" => "Geórgia do Sul e Ilhas Sandwich do Sul",
	    "GI" => "Gibraltar",
	    "GD" => "Granada",
	    "GL" => "Groênlandia",
	    "GR" => "Grécia",
	    "GP" => "Guadalupe",
	    "GU" => "Guam",
	    "GT" => "Guatemala",
	    "GG" => "Guernsey",
	    "GY" => "Guiana",
	    "GF" => "Guiana Francesa",
	    "GN" => "Guiné",
	    "GW" => "Guiné Bissau",
	    "GQ" => "Guiné Equatorial",
	    "GM" => "Gâmbia",
	    "HT" => "Haiti",
	    "NL" => "Holanda",
	    "HN" => "Honduras",
	    "HK" => "Hong Kong, Região Admin. Especial da China",
	    "HU" => "Hungria",
	    "BV" => "Ilha Bouvet",
	    "HM" => "Ilha Heard e Ilhas McDonald",
	    "NF" => "Ilha Norfolk",
	    "IM" => "Ilha de Man",
	    "AX" => "Ilhas Aland",
	    "KY" => "Ilhas Caiman",
	    "CC" => "Ilhas Coco",
	    "CK" => "Ilhas Cook",
	    "FO" => "Ilhas Faroe",
	    "FK" => "Ilhas Malvinas",
	    "MP" => "Ilhas Marianas do Norte",
	    "MH" => "Ilhas Marshall",
	    "UM" => "Ilhas Menores Distantes dos Estados Unidos",
	    "CX" => "Ilhas Natal",
	    "SB" => "Ilhas Salomão",
	    "TC" => "Ilhas Turks e Caicos",
	    "VG" => "Ilhas Virgens Britânicas",
	    "VI" => "Ilhas Virgens dos EUA",
	    "ID" => "Indonésia",
	    "IQ" => "Iraque",
	    "IE" => "Irlanda",
	    "IR" => "Irã",
	    "IS" => "Islândia",
	    "IL" => "Israel",
	    "IT" => "Itália",
	    "YE" => "Iêmen",
	    "JM" => "Jamaica",
	    "JP" => "Japão",
	    "JE" => "Jersey",
	    "JO" => "Jordânia",
	    "KW" => "Kuwait",
	    "LS" => "Lesoto",
	    "LV" => "Letônia",
	    "LR" => "Libéria",
	    "LI" => "Liechtenstein",
	    "LT" => "Lituânia",
	    "LU" => "Luxemburgo",
	    "LB" => "Líbano",
	    "LY" => "Líbia",
	    "MO" => "Macau, Região Admin. Especial da China",
	    "MK" => "Macedônia",
	    "MG" => "Madagascar",
	    "MW" => "Malawi",
	    "MV" => "Maldivas",
	    "ML" => "Mali",
	    "MT" => "Malta",
	    "MY" => "Malásia",
	    "MA" => "Marrocos",
	    "MQ" => "Martinica",
	    "MR" => "Mauritânia",
	    "MU" => "Maurício",
	    "YT" => "Mayotte",
	    "MM" => "Mianmar",
	    "FM" => "Micronésia",
	    "MD" => "Moldávia",
	    "MN" => "Mongólia",
	    "ME" => "Montenegro",
	    "MS" => "Montserrat",
	    "MZ" => "Moçambique",
	    "MX" => "México",
	    "MC" => "Mônaco",
	    "NA" => "Namíbia",
	    "NR" => "Nauru",
	    "NP" => "Nepal",
	    "NI" => "Nicarágua",
	    "NG" => "Nigéria",
	    "NU" => "Niue",
	    "NO" => "Noruega",
	    "NC" => "Nova Caledônia",
	    "NZ" => "Nova Zelândia",
	    "NE" => "Níger",
	    "OM" => "Omã",
	    "PW" => "Palau",
	    "PA" => "Panamá",
	    "PG" => "Papua-Nova Guiné",
	    "PK" => "Paquistão",
	    "PY" => "Paraguai",
	    "PE" => "Peru",
	    "PN" => "Pitcairn",
	    "PF" => "Polinésia Francesa",
	    "PL" => "Polônia",
	    "PR" => "Porto Rico",
	    "PT" => "Portugal",
	    "KG" => "Quirguistão",
	    "KI" => "Quiribati",
	    "KE" => "Quênia",
	    "ZZ" => "Região desconhecida ou inválida",
	    "GB" => "Reino Unido",
	    "CF" => "República Centro-Africana",
	    "DO" => "República Dominicana",
	    "LA" => "República Popular Democrática do Laos",
	    "CZ" => "República Tcheca",
	    "CM" => "República dos Camarões",
	    "RE" => "Reunião",
	    "RO" => "Romênia",
	    "RW" => "Ruanda",
	    "RU" => "Rússia",
	    "EH" => "Saara Ocidental",
	    "PM" => "Saint Pierre e Miquelon",
	    "WS" => "Samoa",
	    "AS" => "Samoa Americana",
	    "SM" => "San Marino",
	    "SH" => "Santa Helena",
	    "LC" => "Santa Lúcia",
	    "SN" => "Senegal",
	    "SL" => "Serra Leoa",
	    "SC" => "Seychelles",
	    "SO" => "Somália",
	    "LK" => "Sri Lanka",
	    "SZ" => "Suazilândia",
	    "SD" => "Sudão",
	    "SR" => "Suriname",
	    "SE" => "Suécia",
	    "CH" => "Suíça",
	    "SJ" => "Svalbard e Jan Mayen",
	    "BL" => "São Bartolomeu",
	    "KN" => "São Cristovão e Nevis",
	    "MF" => "São Martinho",
	    "ST" => "São Tomé e Príncipe",
	    "VC" => "São Vicente e Granadinas",
	    "RS" => "Sérvia",
	    "CS" => "Sérvia e Montenegro",
	    "SY" => "Síria",
	    "TJ" => "Tadjiquistão",
	    "TH" => "Tailândia",
	    "TW" => "Taiwan",
	    "TZ" => "Tanzânia",
	    "IO" => "Território Britânico do Oceano Índico",
	    "PS" => "Território da Palestina",
	    "TF" => "Territórios Franceses do Sul",
	    "TL" => "Timor Leste",
	    "TG" => "Togo",
	    "TK" => "Tokelau",
	    "TO" => "Tonga",
	    "TT" => "Trinidad e Tobago",
	    "TN" => "Tunísia",
	    "TM" => "Turcomenistão",
	    "TR" => "Turquia",
	    "TV" => "Tuvalu",
	    "UA" => "Ucrânia",
	    "UG" => "Uganda",
	    "UY" => "Uruguai",
	    "UZ" => "Uzbequistão",
	    "VU" => "Vanuatu",
	    "VA" => "Vaticano",
	    "VE" => "Venezuela",
	    "VN" => "Vietnã",
	    "WF" => "Wallis e Futuna",
	    "ZW" => "Zimbábue",
	    "ZM" => "Zâmbia",
	    "ZA" => "África do Sul",
	    "AT" => "Áustria",
	    "IN" => "Índia",),
    );

}
