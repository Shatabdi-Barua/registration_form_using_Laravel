@extends('layouts.app')

@push('link')

<link rel="stylesheet" href="/css/bootstrap-select-country.min.css">
<link rel="stylesheet" href="/js/bootstrap-select-country.min.css">
    <!-- Latest compiled and minified JavaScript -->

   
    @endpush
@section('content')
<div class="container">
    <div class="container my-4">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
    @if(count($errors)>0)
        @foreach($errors->all() as $error)
        <div class="alert alert-danger">{{$error}}
        </div>
        @endforeach
    @endif
    @if(session('response'))
    <div class="alert alert-success">
        {{ session('response')}};
    </div>
    @endif
            <div class="card mb-3">
                <div class="card-header bg-custom text-white">Basic Info</div>
                <div class="card-content form-group">
                    <!-- <div class="form-group"> -->
                    <div class="row pt-2 px-2">
                        <div class="col">
                             <label for="membershipType">{{__('Membership Type') }}</label>
                              <select name="membType" id="mtype" class="form-control border" required>
                                <option value="corporateMember"> Corporate - 20,000/- </option>
                                <option value="generalMember"> General - 15,000/- </option>
                                <option value="">Individual - 5000 (without voting rights) </option>
                                <option value=""> Student - 1000 (without voting rights)</option>
                                <option value="lifeMember"> Life member (3,00,000/- One time)</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="businessNature">{{__('Nature of Business') }}</label>
                            <select name="businessNature" id="businessNature" class='form-control border'>
                                <option value="manufacturer"> Manufacturer </option>
                                <option value="exporter"> Exporter</option>
                                <option value="importer"> Importer </option>
                                <option value="indentor"> Indentor </option>
                                <option value="distributor"> Distributor </option>
                                <option value="wholesale-retail"> Wholesale/Retail </option>
                                <option value="other"> Other</option>
                            </select>
                        </div>
                    </div>
                     <div class="row m-2">
                    <label for="specNature">{{('Specific Nature of Business')}}</label>
                        <textarea name="specNature" id="specNature" rows="2" class="form-control"></textarea>
                        <label for="repBy" class='mt-1'>Represented By</label>
                        <textarea name="repBy" id="repBy" rows="2" class="form-control"></textarea>
                    </div>
                    <div class="row p-2">
                        <div class="col">
                            <label for="name"> {{('Member Name')}} </label>
                            <input type="text" name='memberName' class='form-control' required>
                            <label for="memImage" class="mt-1"> {{('Member Image')}}</label>
                            <input type="file" name="image" class="form-control-file border" required>
                        </div>
                        <div class="col">
                            <label for="memNumber">{{('Member Number')}}</label>
                            <input type="text" value="id" name="id" class=form-control readonly>
                            <img src="images\pic.png" class="img-thumbnail p-1 mt-1" alt="none">
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                <div class="card-header bg-custom text-white">Company Information
                    <button type="button" return="false" data-toggle="tooltip" data-placement="top" title="Add another Company (Optional)" onclick="customf()" class="float-right">
                        <i class="fa fa-plus"></i>
                    </button>
                </div>
                 <div class="card-content form-group" id="expandC">
                    <div class="row my-1 px-2">
                        <div class="col-sm-6">
                            <label for="">{{('Company Name')}}</label>
                            <input type="text" name="ComName"class="form-control" required>
                        </div>
                        <div class="col-sm-6">
                            <label for="">{{('Designation')}}</label>
                            <input type="text" name="Desg" class="form-control" required>
                        </div>
                    </div>
                </div>
            </div>
             <div class="card mb-3">
                <div class="card-header bg-custom text-white">Business Address</div>
                <div class="card-content d-flex flex-row flex-wrap align-content-center py-2 pl-1 form-group">
                    <div class="w-50 p-2">
                        <label for="">{{('Street No')}}</label>
                        <input type="text" name="StrNo1" class="form-control" required>
                    </div>
                    <div class="w-50 p-2">
                        <label for="">{{('Zip Code')}}</label>
                        <input type="text" name="Zipcode1" class="form-control">
                    </div>
                    <div class="w-50 p-2">
                        <label for="">{{('City') }}</label>
                        <input type="text" name="city1" class="form-control" required>
                    </div>
                    <div class="w-50 p-2">
                        <label for="">{{('Country')}}</label>
                        <select name="country1" id="" class="form-control selectpicker border">
                            <option value="0">Select Country</option>
                            <option value="1">
                                Afghanistan </option>
                            <option value="2">
                                Albania </option>
                            <option value="3">
                                Algeria </option>
                            <option value="4">
                                American Samoa </option>
                            <option value="5">
                                Andorra </option>
                            <option value="6">
                                Angola </option>
                            <option value="7">
                                Anguilla </option>
                            <option value="8">
                                Antarctica </option>
                            <option value="9">
                                Antigua and Barbuda </option>
                            <option value="10">
                                Argentina </option>
                            <option value="11">
                                Armenia </option>
                            <option value="12">
                                Armenia </option>
                            <option value="13">
                                Aruba </option>
                            <option value="14">
                                Australia </option>
                            <option value="15">
                                Austria </option>
                            <option value="16">
                                Azerbaijan </option>
                            <option value="17">
                                Azerbaijan </option>
                            <option value="18">
                                Bahamas </option>
                            <option value="19">
                                Bahrain </option>
                            <option value="20" selected>
                                Bangladesh </option>
                            <option value="21">
                                Barbados </option>
                            <option value="22">
                                Belarus </option>
                            <option value="23">
                                Belgium </option>
                            <option value="24">
                                Belize </option>
                            <option value="25">
                                Benin </option>
                            <option value="26">
                                Bermuda </option>
                            <option value="27">
                                Bhutan </option>
                            <option value="28">
                                Bolivia </option>
                            <option value="29">
                                Bosnia and Herzegovina </option>
                            <option value="30">
                                Botswana </option>
                            <option value="31">
                                Bouvet Island </option>
                            <option value="32">
                                Brazil </option>
                            <option value="33">
                                British Indian Ocean Territory </option>
                            <option value="34">
                                Brunei Darussalam </option>
                            <option value="35">
                                Bulgaria </option>
                            <option value="36">
                                Burkina Faso </option>
                            <option value="37">
                                Burundi </option>
                            <option value="38">
                                Cambodia </option>
                            <option value="39">
                                Cameroon </option>
                            <option value="40">
                                Canada </option>
                            <option value="41">
                                Cape Verde </option>
                            <option value="42">
                                Cayman Islands </option>
                            <option value="43">
                                Central African Republic </option>
                            <option value="44">
                                Chad </option>
                            <option value="45">
                                Chile </option>
                            <option value="46">
                                China </option>
                            <option value="47">
                                Christmas Island </option>
                            <option value="48">
                                Cocos (Keeling) Islands </option>
                            <option value="49">
                                Colombia </option>
                            <option value="50">
                                Comoros </option>
                            <option value="51">
                                Congo </option>
                            <option value="52">
                                Congo, The Democratic Republic of The </option>
                            <option value="53">
                                Cook Islands </option>
                            <option value="54">
                                Costa Rica </option>
                            <option value="55">
                                Cote D'ivoire </option>
                            <option value="56">
                                Croatia </option>
                            <option value="57">
                                Cuba </option>
                            <option value="58">
                                Cyprus </option>
                            <option value="60">
                                Czech Republic </option>
                            <option value="61">
                                Denmark </option>
                            <option value="62">
                                Djibouti </option>
                            <option value="63">
                                Dominica </option>
                            <option value="64">
                                Dominican Republic </option>
                            <option value="65">
                                Easter Island </option>
                            <option value="66">
                                Ecuador </option>
                            <option value="67">
                                Egypt </option>
                            <option value="68">
                                El Salvador </option>
                            <option value="69">
                                Equatorial Guinea </option>
                            <option value="70">
                                Eritrea </option>
                            <option value="71">
                                Estonia </option>
                            <option value="72">
                                Ethiopia </option>
                            <option value="73">
                                Falkland Islands (Malvinas) </option>
                            <option value="74">
                                Faroe Islands </option>
                            <option value="75">
                                Fiji </option>
                            <option value="76">
                                Finland </option>
                            <option value="77">
                                France </option>
                            <option value="78">
                                French Guiana </option>
                            <option value="79">
                                French Polynesia </option>
                            <option value="80">
                                French Southern Territories </option>
                            <option value="81">
                                Gabon </option>
                            <option value="82">
                                Gambia </option>
                            <option value="83">
                                Georgia </option>
                            <option value="85">
                                Germany </option>
                            <option value="86">
                                Ghana </option>
                            <option value="87">
                                Gibraltar </option>
                            <option value="88">
                                Greece </option>
                            <option value="89">
                                Greenland </option>
                            <option value="91">
                                Grenada </option>
                            <option value="92">
                                Guadeloupe </option>
                            <option value="93">
                                Guam </option>
                            <option value="94">
                                Guatemala </option>
                            <option value="95">
                                Guinea </option>
                            <option value="96">
                                Guinea-bissau </option>
                            <option value="97">
                                Guyana </option>
                            <option value="98">
                                Haiti </option>
                            <option value="99">
                                Heard Island and Mcdonald Islands </option>
                            <option value="100">
                                Honduras </option>
                            <option value="101">
                                Hong Kong </option>
                            <option value="102">
                                Hungary </option>
                            <option value="103">
                                Iceland </option>
                            <option value="104">
                                India </option>
                            <option value="105">
                                Indonesia </option>
                            <option value="106">
                                Indonesia </option>
                            <option value="107">
                                Iran </option>
                            <option value="108">
                                Iraq </option>
                            <option value="109">
                                Ireland </option>
                            <option value="110">
                                Israel </option>
                            <option value="111">
                                Italy </option>
                            <option value="112">
                                Jamaica </option>
                            <option value="113">
                                Japan </option>
                            <option value="114">
                                Jordan </option>
                            <option value="115">
                                Kazakhstan </option>
                            <option value="116">
                                Kazakhstan </option>
                            <option value="117">
                                Kenya </option>
                            <option value="118">
                                Kiribati </option>
                            <option value="119">
                                Korea, North </option>
                            <option value="120">
                                Korea, South </option>
                            <option value="121">
                                Kosovo </option>
                            <option value="122">
                                Kuwait </option>
                            <option value="123">
                                Kyrgyzstan </option>
                            <option value="124">
                                Laos </option>
                            <option value="125">
                                Latvia </option>
                            <option value="126">
                                Lebanon </option>
                            <option value="127">
                                Lesotho </option>
                            <option value="128">
                                Liberia </option>
                            <option value="129">
                                Libyan Arab Jamahiriya </option>
                            <option value="130">
                                Liechtenstein </option>
                            <option value="131">
                                Lithuania </option>
                            <option value="132">
                                Luxembourg </option>
                            <option value="133">
                                Macau </option>
                            <option value="134">
                                Macedonia </option>
                            <option value="135">
                                Madagascar </option>
                            <option value="136">
                                Malawi </option>
                            <option value="137">
                                Malaysia </option>
                            <option value="138">
                                Maldives </option>
                            <option value="139">
                                Mali </option>
                            <option value="140">
                                Malta </option>
                            <option value="141">
                                Marshall Islands </option>
                            <option value="142">
                                Martinique </option>
                            <option value="143">
                                Mauritania </option>
                            <option value="144">
                                Mauritius </option>
                            <option value="145">
                                Mayotte </option>
                            <option value="146">
                                Mexico </option>
                            <option value="147">
                                Micronesia, Federated States of </option>
                            <option value="148">
                                Moldova, Republic of </option>
                            <option value="149">
                                Monaco </option>
                            <option value="150">
                                Mongolia </option>
                            <option value="151">
                                Montenegro </option>
                            <option value="152">
                                Montserrat </option>
                            <option value="153">
                                Morocco </option>
                            <option value="154">
                                Mozambique </option>
                            <option value="155">
                                Myanmar </option>
                            <option value="156">
                                Namibia </option>
                            <option value="157">
                                Nauru </option>
                            <option value="158">
                                Nepal </option>
                            <option value="159">
                                Netherlands </option>
                            <option value="160">
                                Netherlands Antilles </option>
                            <option value="161">
                                New Caledonia </option>
                            <option value="162">
                                New Zealand </option>
                            <option value="163">
                                Nicaragua </option>
                            <option value="164">
                                Niger </option>
                            <option value="165">
                                Nigeria </option>
                            <option value="166">
                                Niue </option>
                            <option value="167">
                                Norfolk Island </option>
                            <option value="168">
                                Northern Mariana Islands </option>
                            <option value="169">
                                Norway </option>
                            <option value="170">
                                Oman </option>
                            <option value="171">
                                Pakistan </option>
                            <option value="172">
                                Palau </option>
                            <option value="173">
                                Palestinian Territory </option>
                            <option value="174">
                                Panama </option>
                            <option value="175">
                                Papua New Guinea </option>
                            <option value="176">
                                Paraguay </option>
                            <option value="177">
                                Peru </option>
                            <option value="178">
                                Philippines </option>
                            <option value="179">
                                Pitcairn </option>
                            <option value="180">
                                Poland </option>
                            <option value="181">
                                Portugal </option>
                            <option value="182">
                                Puerto Rico </option>
                            <option value="183">
                                Qatar </option>
                            <option value="184">
                                Reunion </option>
                            <option value="185">
                                Romania </option>
                            <option value="186">
                                Russia </option>
                            <option value="187">
                                Russia </option>
                            <option value="188">
                                Rwanda </option>
                            <option value="189">
                                Saint Helena </option>
                            <option value="190">
                                Saint Kitts and Nevis </option>
                            <option value="191">
                                Saint Lucia </option>
                            <option value="192">
                                Saint Pierre and Miquelon </option>
                            <option value="193">
                                Saint Vincent and The Grenadines </option>
                            <option value="194">
                                Samoa </option>
                            <option value="195">
                                San Marino </option>
                            <option value="196">
                                Sao Tome and Principe </option>
                            <option value="197">
                                Saudi Arabia </option>
                            <option value="198">
                                Senegal </option>
                            <option value="199">
                                Serbia and Montenegro </option>
                            <option value="200">
                                Seychelles </option>
                            <option value="201">
                                Sierra Leone </option>
                            <option value="202">
                                Singapore </option>
                            <option value="203">
                                Slovakia </option>
                            <option value="204">
                                Slovenia </option>
                            <option value="205">
                                Solomon Islands </option>
                            <option value="206">
                                Somalia </option>
                            <option value="207">
                                South Africa </option>
                            <option value="208">
                                South Georgia and The South Sandwich Islands </option>
                            <option value="209">
                                Spain </option>
                            <option value="210">
                                Sri Lanka </option>
                            <option value="211">
                                Sudan </option>
                            <option value="212">
                                Suriname </option>
                            <option value="213">
                                Svalbard and Jan Mayen </option>
                            <option value="214">
                                Swaziland </option>
                            <option value="215">
                                Sweden </option>
                            <option value="216">
                                Switzerland </option>
                            <option value="217">
                                Syria </option>
                            <option value="218">
                                Taiwan </option>
                            <option value="219">
                                Tajikistan </option>
                            <option value="220">
                                Tanzania, United Republic of </option>
                            <option value="221">
                                Thailand </option>
                            <option value="222">
                                Timor-leste </option>
                            <option value="223">
                                Togo </option>
                            <option value="224">
                                Tokelau </option>
                            <option value="225">
                                Tonga </option>
                            <option value="226">
                                Trinidad and Tobago </option>
                            <option value="227">
                                Tunisia </option>
                            <option value="228">
                                Turkey </option>
                            <option value="229">
                                Turkey </option>
                            <option value="230">
                                Turkmenistan </option>
                            <option value="231">
                                Turks and Caicos Islands </option>
                            <option value="232">
                                Tuvalu </option>
                            <option value="233">
                                Uganda </option>
                            <option value="234">
                                Ukraine </option>
                            <option value="235">
                                United Arab Emirates </option>
                            <option value="236">
                                United Kingdom </option>
                            <option value="237">
                                United States </option>
                            <option value="238">
                                United States Minor Outlying Islands </option>
                            <option value="239">
                                Uruguay </option>
                            <option value="240">
                                Uzbekistan </option>
                            <option value="241">
                                Vanuatu </option>
                            <option value="242">
                                Vatican City </option>
                            <option value="243">
                                Venezuela </option>
                            <option value="244">
                                Vietnam </option>
                            <option value="245">
                                Virgin Islands, British </option>
                            <option value="246">
                                Virgin Islands, U.S. </option>
                            <option value="247">
                                Wallis and Futuna </option>
                            <option value="248">
                                Western Sahara </option>
                            <option value="249">
                                Yemen </option>
                            <option value="250">
                                Yemen </option>
                            <option value="251">
                                Zambia </option>
                            <option value="252">
                                Zimbabwe </option>
                        </select>
                    </div>
                </div>
            </div>
             <div class="card mb-3">
                <div class="card-header bg-custom text-white">Residence Address</div>
                <div class="card-content d-flex flex-row flex-wrap align-content-center py-2 pl-1">
                    <div class="w-50 p-2">
                        <label for="">{{('Street No')}}</label>
                        <input type="text" name="StrNo2" class="form-control" required>
                    </div>
                    <div class="w-50 p-2">
                        <label for="">{{('Zip Code')}}</label>
                        <input type="text" name="Zipcode2" class="form-control">
                    </div>
                    <div class="w-50 p-2">
                        <label for="">{{('City') }}</label>
                        <input type="text" name="city2" class="form-control" required>
                    </div>
                    <div class="w-50 p-2">
                        <label for="">{{('Country')}}</label>
                        <select name="country2" id="" class="form-control selectpicker border">
                            <option value="0">Select Country</option>
                            <option value="1">
                                Afghanistan </option>
                            <option value="2">
                                Albania </option>
                            <option value="3">
                                Algeria </option>
                            <option value="4">
                                American Samoa </option>
                            <option value="5">
                                Andorra </option>
                            <option value="6">
                                Angola </option>
                            <option value="7">
                                Anguilla </option>
                            <option value="8">
                                Antarctica </option>
                            <option value="9">
                                Antigua and Barbuda </option>
                            <option value="10">
                                Argentina </option>
                            <option value="11">
                                Armenia </option>
                            <option value="12">
                                Armenia </option>
                            <option value="13">
                                Aruba </option>
                            <option value="14">
                                Australia </option>
                            <option value="15">
                                Austria </option>
                            <option value="16">
                                Azerbaijan </option>
                            <option value="17">
                                Azerbaijan </option>
                            <option value="18">
                                Bahamas </option>
                            <option value="19">
                                Bahrain </option>
                            <option value="20" selected>
                                Bangladesh </option>
                            <option value="21">
                                Barbados </option>
                            <option value="22">
                                Belarus </option>
                            <option value="23">
                                Belgium </option>
                            <option value="24">
                                Belize </option>
                            <option value="25">
                                Benin </option>
                            <option value="26">
                                Bermuda </option>
                            <option value="27">
                                Bhutan </option>
                            <option value="28">
                                Bolivia </option>
                            <option value="29">
                                Bosnia and Herzegovina </option>
                            <option value="30">
                                Botswana </option>
                            <option value="31">
                                Bouvet Island </option>
                            <option value="32">
                                Brazil </option>
                            <option value="33">
                                British Indian Ocean Territory </option>
                            <option value="34">
                                Brunei Darussalam </option>
                            <option value="35">
                                Bulgaria </option>
                            <option value="36">
                                Burkina Faso </option>
                            <option value="37">
                                Burundi </option>
                            <option value="38">
                                Cambodia </option>
                            <option value="39">
                                Cameroon </option>
                            <option value="40">
                                Canada </option>
                            <option value="41">
                                Cape Verde </option>
                            <option value="42">
                                Cayman Islands </option>
                            <option value="43">
                                Central African Republic </option>
                            <option value="44">
                                Chad </option>
                            <option value="45">
                                Chile </option>
                            <option value="46">
                                China </option>
                            <option value="47">
                                Christmas Island </option>
                            <option value="48">
                                Cocos (Keeling) Islands </option>
                            <option value="49">
                                Colombia </option>
                            <option value="50">
                                Comoros </option>
                            <option value="51">
                                Congo </option>
                            <option value="52">
                                Congo, The Democratic Republic of The </option>
                            <option value="53">
                                Cook Islands </option>
                            <option value="54">
                                Costa Rica </option>
                            <option value="55">
                                Cote D'ivoire </option>
                            <option value="56">
                                Croatia </option>
                            <option value="57">
                                Cuba </option>
                            <option value="58">
                                Cyprus </option>
                            <option value="60">
                                Czech Republic </option>
                            <option value="61">
                                Denmark </option>
                            <option value="62">
                                Djibouti </option>
                            <option value="63">
                                Dominica </option>
                            <option value="64">
                                Dominican Republic </option>
                            <option value="65">
                                Easter Island </option>
                            <option value="66">
                                Ecuador </option>
                            <option value="67">
                                Egypt </option>
                            <option value="68">
                                El Salvador </option>
                            <option value="69">
                                Equatorial Guinea </option>
                            <option value="70">
                                Eritrea </option>
                            <option value="71">
                                Estonia </option>
                            <option value="72">
                                Ethiopia </option>
                            <option value="73">
                                Falkland Islands (Malvinas) </option>
                            <option value="74">
                                Faroe Islands </option>
                            <option value="75">
                                Fiji </option>
                            <option value="76">
                                Finland </option>
                            <option value="77">
                                France </option>
                            <option value="78">
                                French Guiana </option>
                            <option value="79">
                                French Polynesia </option>
                            <option value="80">
                                French Southern Territories </option>
                            <option value="81">
                                Gabon </option>
                            <option value="82">
                                Gambia </option>
                            <option value="83">
                                Georgia </option>
                            <option value="85">
                                Germany </option>
                            <option value="86">
                                Ghana </option>
                            <option value="87">
                                Gibraltar </option>
                            <option value="88">
                                Greece </option>
                            <option value="89">
                                Greenland </option>
                            <option value="91">
                                Grenada </option>
                            <option value="92">
                                Guadeloupe </option>
                            <option value="93">
                                Guam </option>
                            <option value="94">
                                Guatemala </option>
                            <option value="95">
                                Guinea </option>
                            <option value="96">
                                Guinea-bissau </option>
                            <option value="97">
                                Guyana </option>
                            <option value="98">
                                Haiti </option>
                            <option value="99">
                                Heard Island and Mcdonald Islands </option>
                            <option value="100">
                                Honduras </option>
                            <option value="101">
                                Hong Kong </option>
                            <option value="102">
                                Hungary </option>
                            <option value="103">
                                Iceland </option>
                            <option value="104">
                                India </option>
                            <option value="105">
                                Indonesia </option>
                            <option value="106">
                                Indonesia </option>
                            <option value="107">
                                Iran </option>
                            <option value="108">
                                Iraq </option>
                            <option value="109">
                                Ireland </option>
                            <option value="110">
                                Israel </option>
                            <option value="111">
                                Italy </option>
                            <option value="112">
                                Jamaica </option>
                            <option value="113">
                                Japan </option>
                            <option value="114">
                                Jordan </option>
                            <option value="115">
                                Kazakhstan </option>
                            <option value="116">
                                Kazakhstan </option>
                            <option value="117">
                                Kenya </option>
                            <option value="118">
                                Kiribati </option>
                            <option value="119">
                                Korea, North </option>
                            <option value="120">
                                Korea, South </option>
                            <option value="121">
                                Kosovo </option>
                            <option value="122">
                                Kuwait </option>
                            <option value="123">
                                Kyrgyzstan </option>
                            <option value="124">
                                Laos </option>
                            <option value="125">
                                Latvia </option>
                            <option value="126">
                                Lebanon </option>
                            <option value="127">
                                Lesotho </option>
                            <option value="128">
                                Liberia </option>
                            <option value="129">
                                Libyan Arab Jamahiriya </option>
                            <option value="130">
                                Liechtenstein </option>
                            <option value="131">
                                Lithuania </option>
                            <option value="132">
                                Luxembourg </option>
                            <option value="133">
                                Macau </option>
                            <option value="134">
                                Macedonia </option>
                            <option value="135">
                                Madagascar </option>
                            <option value="136">
                                Malawi </option>
                            <option value="137">
                                Malaysia </option>
                            <option value="138">
                                Maldives </option>
                            <option value="139">
                                Mali </option>
                            <option value="140">
                                Malta </option>
                            <option value="141">
                                Marshall Islands </option>
                            <option value="142">
                                Martinique </option>
                            <option value="143">
                                Mauritania </option>
                            <option value="144">
                                Mauritius </option>
                            <option value="145">
                                Mayotte </option>
                            <option value="146">
                                Mexico </option>
                            <option value="147">
                                Micronesia, Federated States of </option>
                            <option value="148">
                                Moldova, Republic of </option>
                            <option value="149">
                                Monaco </option>
                            <option value="150">
                                Mongolia </option>
                            <option value="151">
                                Montenegro </option>
                            <option value="152">
                                Montserrat </option>
                            <option value="153">
                                Morocco </option>
                            <option value="154">
                                Mozambique </option>
                            <option value="155">
                                Myanmar </option>
                            <option value="156">
                                Namibia </option>
                            <option value="157">
                                Nauru </option>
                            <option value="158">
                                Nepal </option>
                            <option value="159">
                                Netherlands </option>
                            <option value="160">
                                Netherlands Antilles </option>
                            <option value="161">
                                New Caledonia </option>
                            <option value="162">
                                New Zealand </option>
                            <option value="163">
                                Nicaragua </option>
                            <option value="164">
                                Niger </option>
                            <option value="165">
                                Nigeria </option>
                            <option value="166">
                                Niue </option>
                            <option value="167">
                                Norfolk Island </option>
                            <option value="168">
                                Northern Mariana Islands </option>
                            <option value="169">
                                Norway </option>
                            <option value="170">
                                Oman </option>
                            <option value="171">
                                Pakistan </option>
                            <option value="172">
                                Palau </option>
                            <option value="173">
                                Palestinian Territory </option>
                            <option value="174">
                                Panama </option>
                            <option value="175">
                                Papua New Guinea </option>
                            <option value="176">
                                Paraguay </option>
                            <option value="177">
                                Peru </option>
                            <option value="178">
                                Philippines </option>
                            <option value="179">
                                Pitcairn </option>
                            <option value="180">
                                Poland </option>
                            <option value="181">
                                Portugal </option>
                            <option value="182">
                                Puerto Rico </option>
                            <option value="183">
                                Qatar </option>
                            <option value="184">
                                Reunion </option>
                            <option value="185">
                                Romania </option>
                            <option value="186">
                                Russia </option>
                            <option value="187">
                                Russia </option>
                            <option value="188">
                                Rwanda </option>
                            <option value="189">
                                Saint Helena </option>
                            <option value="190">
                                Saint Kitts and Nevis </option>
                            <option value="191">
                                Saint Lucia </option>
                            <option value="192">
                                Saint Pierre and Miquelon </option>
                            <option value="193">
                                Saint Vincent and The Grenadines </option>
                            <option value="194">
                                Samoa </option>
                            <option value="195">
                                San Marino </option>
                            <option value="196">
                                Sao Tome and Principe </option>
                            <option value="197">
                                Saudi Arabia </option>
                            <option value="198">
                                Senegal </option>
                            <option value="199">
                                Serbia and Montenegro </option>
                            <option value="200">
                                Seychelles </option>
                            <option value="201">
                                Sierra Leone </option>
                            <option value="202">
                                Singapore </option>
                            <option value="203">
                                Slovakia </option>
                            <option value="204">
                                Slovenia </option>
                            <option value="205">
                                Solomon Islands </option>
                            <option value="206">
                                Somalia </option>
                            <option value="207">
                                South Africa </option>
                            <option value="208">
                                South Georgia and The South Sandwich Islands </option>
                            <option value="209">
                                Spain </option>
                            <option value="210">
                                Sri Lanka </option>
                            <option value="211">
                                Sudan </option>
                            <option value="212">
                                Suriname </option>
                            <option value="213">
                                Svalbard and Jan Mayen </option>
                            <option value="214">
                                Swaziland </option>
                            <option value="215">
                                Sweden </option>
                            <option value="216">
                                Switzerland </option>
                            <option value="217">
                                Syria </option>
                            <option value="218">
                                Taiwan </option>
                            <option value="219">
                                Tajikistan </option>
                            <option value="220">
                                Tanzania, United Republic of </option>
                            <option value="221">
                                Thailand </option>
                            <option value="222">
                                Timor-leste </option>
                            <option value="223">
                                Togo </option>
                            <option value="224">
                                Tokelau </option>
                            <option value="225">
                                Tonga </option>
                            <option value="226">
                                Trinidad and Tobago </option>
                            <option value="227">
                                Tunisia </option>
                            <option value="228">
                                Turkey </option>
                            <option value="229">
                                Turkey </option>
                            <option value="230">
                                Turkmenistan </option>
                            <option value="231">
                                Turks and Caicos Islands </option>
                            <option value="232">
                                Tuvalu </option>
                            <option value="233">
                                Uganda </option>
                            <option value="234">
                                Ukraine </option>
                            <option value="235">
                                United Arab Emirates </option>
                            <option value="236">
                                United Kingdom </option>
                            <option value="237">
                                United States </option>
                            <option value="238">
                                United States Minor Outlying Islands </option>
                            <option value="239">
                                Uruguay </option>
                            <option value="240">
                                Uzbekistan </option>
                            <option value="241">
                                Vanuatu </option>
                            <option value="242">
                                Vatican City </option>
                            <option value="243">
                                Venezuela </option>
                            <option value="244">
                                Vietnam </option>
                            <option value="245">
                                Virgin Islands, British </option>
                            <option value="246">
                                Virgin Islands, U.S. </option>
                            <option value="247">
                                Wallis and Futuna </option>
                            <option value="248">
                                Western Sahara </option>
                            <option value="249">
                                Yemen </option>
                            <option value="250">
                                Yemen </option>
                            <option value="251">
                                Zambia </option>
                            <option value="252">
                                Zimbabwe </option>
                        </select>
                    </div>
                </div>
            </div>
             <div class="card mb-3">
                <div class="card-header bg-custom text-white">Contact Information
                    <button type="button" id="add_more_contact" return="false" data-toggle="tooltip" data-placement="top" title="Add other details" onclick="addInfo()" class="float-right">
                        <i class="fa fa-plus"></i>
                    </button>
                </div>
                <div class="card-content form-group">
                    <div class="d-flex flex-row flex-wrap align-content-center my-3" id="expandContactInfo">
                        <div class="w-50 p-3">
                            <label for="">{{('Phone Office')}}</label> <br>
                            <input type="text" name="PhnOffice" class="form-control">
                        </div>
                        <div class="w-50 p-3">
                            <label for="">{{('Phone Residence')}}</label> <br>
                            <input type="text" name="PhnRes" class="form-control">
                        </div>
                        <div class="w-50 p-3">
                            <label for="">{{('Fax')}}</label> <br>
                            <input type="text" name="fax" class="form-control">
                        </div>
                        <div class="w-50 p-3">
                            <label for="">{{('Email Address')}}</label> <br>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="w-50 p-3">
                            <label for="">{{('Skype')}}</label> <br>
                            <input type="text" name="skype" class="form-control">
                        </div>
                        <div class="w-50 p-3">
                            <label for="">{{('Web')}}</label> <br>
                            <input type="text" name="web" class="form-control">
                        </div>
                        <div class="w-50 p-3">
                            <label for="">{{ __('Mobile Number')}}</label> <br>
                            <input type="text" name="mobile" class="form-control">
                        </div>
                        <div class="w-50 p-3">
                            <label for="">{{ __('Password')}}</label> <br>
                            <input type="text" name="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="new-password">
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="w-50 p-3">
                            <label for="">{{ __('Confirm Password')}}</label> <br>
                            <input type="text" name="confpass" class="form-control"required autocomplete="new-password">
                        </div>
                    </div>
                </div>
            </div>
              <div class="card mb-3">
                <div class="card-header bg-custom text-white">Other Information</div>
                <div class="card-content form-group">
                    <div class="d-flex flex-row flex-wrap align-content-center justify-content-start my-3">
                        <div class="w-50 p-3">
                            <label for="">{{('Name Of The Proposer')}}</label> <br>
                            <input type="text" name="proposerName" class="form-control">
                        </div>
                        <div class="w-50 p-3">
                            <label for="">{{('Proposer Membership No')}}</label> <br>
                            <input type="text" name="proposerNo" class="form-control">
                        </div>
                        <div class="w-50 p-3">
                            <label for="">{{('Name Of The Seconder')}}</label> <br>
                            <input type="text" name="seconderName" class="form-control">
                        </div>
                        <div class="w-50 p-3">
                            <label for="">{{('Seconder Membership No')}}</label> <br>
                            <input type="text" name="seconderNo" class="form-control">
                        </div>
                        <div class="w-50 p-3">
                            <label for="">{{('Educational Qualification')}}</label> <br>
                            <input type="text" name="qualification" class="form-control">
                        </div>
                        <div class="w-50 p-3">
                            <label for="">{{('Joining Date in Cxo')}}</label> <br>
                            <input type="date" name="JoinDate" class="form-control">
                        </div>
                        <div class="w-50 p-3">
                            <label for=""> {{('Name Of Any Other Commercial Or Industrial Association')}} <br> {{('Of Which The Applicant Is A Member')}}</label> <br>
                            <textarea name="association" id="" cols="50" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header bg-custom text-white">Payment info</div>
                <div class="card-content form-group">
                    <div class="d-flex flex-row flex-wrap align-content-center justify-content-start my-3">
                        <div class="w-50 p-3">
                            <label for="">Payment Type</label> <br>
                            <select name="" class="form-control" id="paymentSelect">
                                <option value="0">Select payment type</option>
                                <option value="checkSelect">Bank Check</option>
                                <option value="bkashSelect">Bkash</option>
                            </select>
                        </div>
                        <div class="w-50 p-3" id="bkash_trnx" style="display: none;">
                            <label for="">Transaction Id</label> <br>
                            <input type="text" class="form-control" placeholder="Trxn Id">
                        </div>
                        <div class="w-50 p-3" id="check_photo" style="display: none;">
                            <label for="">Clear photo of your check</label>
                            <input type="file" class="form-control-file border">
                        </div>
                    </div>
                </div>
            </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </div>
             </form>
</div> 
</div>
</div>
</div>

@endsection
