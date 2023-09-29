@extends('layouts.apps')

@section('content')
    <!-- <div class="container">
                                                                                                                                                                                                                                                                                                                                <div class="row justify-content-center">
                                                                                                                                                                                                                                                                                                                                    <div class="col-md-8">
                                                                                                                                                                                                                                                                                                                                        <div class="card">
                                                                                                                                                                                                                                                                                                                                            <div class="card-header">Dashboard</div>

                                                                                                                                                                                                                                                                                                                                            <div class="card-body">
                                                                                                                                                                                                                                                                                                                                                @if (session('status'))
    <div class="alert alert-success" role="alert">
                                                                                                                                                                                                                                                                                                                                                        {{ session('status') }}
                                                                                                                                                                                                                                                                                                                                                    </div>
    @endif

                                                                                                                                                                                                                                                                                                                                                You are logged in!
                                                                                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                                                            </div> -->

    <div class="container-fluid px-4 pt-5">
        <div class="card border-0 bg-transparent mx-2 mb-5" style="width: 100%;">
            <div class="card-body">
                <div class="d-flex flex-row justify-content-between mb-5">
                    <h5 class="card-title text-light">Status</h5>
                    <h5 class="card-title text-light">{{ $formattedDateTime }}</h5>
                </div>
                <section class="d-flex flex-row justify-content-around">
                    <div>
                        <svg class="mb-5" width="80" height="80" viewBox="0 0 48 41" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect width="48" height="41" rx="10" fill="#07C0AA" />
                            <path
                                d="M24 10C21.38 10 19.25 12.13 19.25 14.75C19.25 17.32 21.26 19.4 23.88 19.49C23.96 19.48 24.04 19.48 24.1 19.49C24.12 19.49 24.13 19.49 24.15 19.49C24.16 19.49 24.16 19.49 24.17 19.49C26.73 19.4 28.74 17.32 28.75 14.75C28.75 12.13 26.62 10 24 10Z"
                                fill="white" />
                            <path
                                d="M29.08 22.1499C26.29 20.2899 21.74 20.2899 18.93 22.1499C17.66 22.9999 16.96 24.1499 16.96 25.3799C16.96 26.6099 17.66 27.7499 18.92 28.5899C20.32 29.5299 22.16 29.9999 24 29.9999C25.84 29.9999 27.68 29.5299 29.08 28.5899C30.34 27.7399 31.04 26.5999 31.04 25.3599C31.03 24.1299 30.34 22.9899 29.08 22.1499Z"
                                fill="white" />
                        </svg>
                        <h6 class="text-light">Total Employee</h6>
                        <h5 class="text-light">789</h5>
                    </div>
                    <div>
                        <svg class="mb-5" width="80" height="80" viewBox="0 0 48 41" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect width="48" height="41" rx="10" fill="#F2A139" />
                            <path
                                d="M29 11.5H19C16 11.5 14 13 14 16.5V23.5C14 27 16 28.5 19 28.5H29C32 28.5 34 27 34 23.5V16.5C34 13 32 11.5 29 11.5ZM20 25.75H17C16.59 25.75 16.25 25.41 16.25 25C16.25 24.59 16.59 24.25 17 24.25H20C20.41 24.25 20.75 24.59 20.75 25C20.75 25.41 20.41 25.75 20 25.75ZM24 23C22.34 23 21 21.66 21 20C21 18.34 22.34 17 24 17C25.66 17 27 18.34 27 20C27 21.66 25.66 23 24 23ZM31 15.75H28C27.59 15.75 27.25 15.41 27.25 15C27.25 14.59 27.59 14.25 28 14.25H31C31.41 14.25 31.75 14.59 31.75 15C31.75 15.41 31.41 15.75 31 15.75Z"
                                fill="white" />
                        </svg>
                        <h6 class="text-light">Total Gross Salary</h6>
                        <h5 class="text-light">$12,780.99</h5>
                    </div>
                    <div>
                        <svg class="mb-5" width="80" height="80" viewBox="0 0 48 41" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect width="48" height="41" rx="10" fill="#9142E6" />
                            <path
                                d="M19 10H18C15 10 14 11.79 14 14V15V29C14 29.83 14.94 30.3 15.6 29.8L17.31 28.52C17.71 28.22 18.27 28.26 18.63 28.62L20.29 30.29C20.68 30.68 21.32 30.68 21.71 30.29L23.39 28.61C23.74 28.26 24.3 28.22 24.69 28.52L26.4 29.8C27.06 30.29 28 29.82 28 29V12C28 10.9 28.9 10 30 10H19ZM17.97 22.01C17.42 22.01 16.97 21.56 16.97 21.01C16.97 20.46 17.42 20.01 17.97 20.01C18.52 20.01 18.97 20.46 18.97 21.01C18.97 21.56 18.52 22.01 17.97 22.01ZM17.97 18.01C17.42 18.01 16.97 17.56 16.97 17.01C16.97 16.46 17.42 16.01 17.97 16.01C18.52 16.01 18.97 16.46 18.97 17.01C18.97 17.56 18.52 18.01 17.97 18.01ZM24 21.76H21C20.59 21.76 20.25 21.42 20.25 21.01C20.25 20.6 20.59 20.26 21 20.26H24C24.41 20.26 24.75 20.6 24.75 21.01C24.75 21.42 24.41 21.76 24 21.76ZM24 17.76H21C20.59 17.76 20.25 17.42 20.25 17.01C20.25 16.6 20.59 16.26 21 16.26H24C24.41 16.26 24.75 16.6 24.75 17.01C24.75 17.42 24.41 17.76 24 17.76Z"
                                fill="white" />
                            <path
                                d="M30.01 10V11.5C30.67 11.5 31.3 11.77 31.76 12.22C32.24 12.71 32.5 13.34 32.5 14V16.42C32.5 17.16 32.17 17.5 31.42 17.5H29.5V12.01C29.5 11.73 29.73 11.5 30.01 11.5V10ZM30.01 10C28.9 10 28 10.9 28 12.01V19H31.42C33 19 34 18 34 16.42V14C34 12.9 33.55 11.9 32.83 11.17C32.1 10.45 31.11 10.01 30.01 10C30.02 10 30.01 10 30.01 10Z"
                                fill="white" />
                        </svg>
                        <h6 class="text-light">Total Net Pay</h6>
                        <h5 class="text-light">5724</h5>
                    </div>
                    <div>
                        <svg class="mb-5" width="80" height="80" viewBox="0 0 49 41" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect width="49" height="41" rx="10" fill="#19BCFD" />
                            <path
                                d="M34.09 14.98C33.24 14.04 31.82 13.57 29.76 13.57H29.52V13.53C29.52 11.85 29.52 9.77002 25.76 9.77002H24.24C20.48 9.77002 20.48 11.86 20.48 13.53V13.58H20.24C18.17 13.58 16.76 14.05 15.91 14.99C14.92 16.09 14.95 17.57 15.05 18.58L15.06 18.65L15.1375 19.4633C15.1518 19.6131 15.2324 19.7484 15.3583 19.8307C15.5981 19.9877 15.9995 20.2464 16.24 20.38C16.38 20.47 16.53 20.55 16.68 20.63C18.39 21.57 20.27 22.2 22.18 22.51C22.27 23.45 22.68 24.55 24.87 24.55C27.06 24.55 27.49 23.46 27.56 22.49C29.6 22.16 31.57 21.45 33.35 20.41C33.41 20.38 33.45 20.35 33.5 20.32C33.8968 20.0958 34.3083 19.8195 34.6835 19.5489C34.7965 19.4673 34.8688 19.3413 34.8842 19.2028L34.9 19.06L34.95 18.59C34.96 18.53 34.96 18.48 34.97 18.41C35.05 17.4 35.03 16.02 34.09 14.98ZM26.09 21.83C26.09 22.89 26.09 23.05 24.86 23.05C23.63 23.05 23.63 22.86 23.63 21.84V20.58H26.09V21.83ZM21.91 13.57V13.53C21.91 11.83 21.91 11.2 24.24 11.2H25.76C28.09 11.2 28.09 11.84 28.09 13.53V13.58H21.91V13.57Z"
                                fill="white" />
                            <path
                                d="M33.8733 21.7344C34.2269 21.5661 34.6342 21.8464 34.5988 22.2364L34.2398 26.1902C34.0298 28.1902 33.2098 30.2302 28.8098 30.2302H21.1898C16.7898 30.2302 15.9698 28.1902 15.7598 26.2002L15.4191 22.4524C15.3841 22.0669 15.782 21.787 16.1347 21.9465C17.2741 22.462 19.3772 23.3766 20.6764 23.7169C20.8407 23.7599 20.9736 23.8775 21.0456 24.0314C21.6525 25.3295 22.969 26.0202 24.8698 26.0202C26.752 26.0202 28.085 25.3029 28.694 24.0016C28.766 23.8476 28.8991 23.7301 29.0635 23.6868C30.443 23.3238 32.6816 22.3015 33.8733 21.7344Z"
                                fill="white" />
                        </svg>
                        <h6 class="text-light">Job Applied</h6>
                        <h5 class="text-light">2130</h5>
                    </div>
                </section>

            </div>
        </div>
        <div class="row">
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-area me-1"></i>
                        Area Chart Example
                    </div>
                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-bar me-1"></i>
                        Bar Chart Example
                    </div>
                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                </div>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                DataTable Example
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                        </tr>
                        <tr>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
                            <td>2011/07/25</td>
                            <td>$170,750</td>
                        </tr>
                        <tr>
                            <td>Ashton Cox</td>
                            <td>Junior Technical Author</td>
                            <td>San Francisco</td>
                            <td>66</td>
                            <td>2009/01/12</td>
                            <td>$86,000</td>
                        </tr>
                        <tr>
                            <td>Cedric Kelly</td>
                            <td>Senior Javascript Developer</td>
                            <td>Edinburgh</td>
                            <td>22</td>
                            <td>2012/03/29</td>
                            <td>$433,060</td>
                        </tr>
                        <tr>
                            <td>Airi Satou</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>33</td>
                            <td>2008/11/28</td>
                            <td>$162,700</td>
                        </tr>
                        <tr>
                            <td>Brielle Williamson</td>
                            <td>Integration Specialist</td>
                            <td>New York</td>
                            <td>61</td>
                            <td>2012/12/02</td>
                            <td>$372,000</td>
                        </tr>
                        <tr>
                            <td>Herrod Chandler</td>
                            <td>Sales Assistant</td>
                            <td>San Francisco</td>
                            <td>59</td>
                            <td>2012/08/06</td>
                            <td>$137,500</td>
                        </tr>
                        <tr>
                            <td>Rhona Davidson</td>
                            <td>Integration Specialist</td>
                            <td>Tokyo</td>
                            <td>55</td>
                            <td>2010/10/14</td>
                            <td>$327,900</td>
                        </tr>
                        <tr>
                            <td>Colleen Hurst</td>
                            <td>Javascript Developer</td>
                            <td>San Francisco</td>
                            <td>39</td>
                            <td>2009/09/15</td>
                            <td>$205,500</td>
                        </tr>
                        <tr>
                            <td>Sonya Frost</td>
                            <td>Software Engineer</td>
                            <td>Edinburgh</td>
                            <td>23</td>
                            <td>2008/12/13</td>
                            <td>$103,600</td>
                        </tr>
                        <tr>
                            <td>Jena Gaines</td>
                            <td>Office Manager</td>
                            <td>London</td>
                            <td>30</td>
                            <td>2008/12/19</td>
                            <td>$90,560</td>
                        </tr>
                        <tr>
                            <td>Quinn Flynn</td>
                            <td>Support Lead</td>
                            <td>Edinburgh</td>
                            <td>22</td>
                            <td>2013/03/03</td>
                            <td>$342,000</td>
                        </tr>
                        <tr>
                            <td>Charde Marshall</td>
                            <td>Regional Director</td>
                            <td>San Francisco</td>
                            <td>36</td>
                            <td>2008/10/16</td>
                            <td>$470,600</td>
                        </tr>
                        <tr>
                            <td>Haley Kennedy</td>
                            <td>Senior Marketing Designer</td>
                            <td>London</td>
                            <td>43</td>
                            <td>2012/12/18</td>
                            <td>$313,500</td>
                        </tr>
                        <tr>
                            <td>Tatyana Fitzpatrick</td>
                            <td>Regional Director</td>
                            <td>London</td>
                            <td>19</td>
                            <td>2010/03/17</td>
                            <td>$385,750</td>
                        </tr>
                        <tr>
                            <td>Michael Silva</td>
                            <td>Marketing Designer</td>
                            <td>London</td>
                            <td>66</td>
                            <td>2012/11/27</td>
                            <td>$198,500</td>
                        </tr>
                        <tr>
                            <td>Paul Byrd</td>
                            <td>Chief Financial Officer (CFO)</td>
                            <td>New York</td>
                            <td>64</td>
                            <td>2010/06/09</td>
                            <td>$725,000</td>
                        </tr>
                        <tr>
                            <td>Gloria Little</td>
                            <td>Systems Administrator</td>
                            <td>New York</td>
                            <td>59</td>
                            <td>2009/04/10</td>
                            <td>$237,500</td>
                        </tr>
                        <tr>
                            <td>Bradley Greer</td>
                            <td>Software Engineer</td>
                            <td>London</td>
                            <td>41</td>
                            <td>2012/10/13</td>
                            <td>$132,000</td>
                        </tr>
                        <tr>
                            <td>Dai Rios</td>
                            <td>Personnel Lead</td>
                            <td>Edinburgh</td>
                            <td>35</td>
                            <td>2012/09/26</td>
                            <td>$217,500</td>
                        </tr>
                        <tr>
                            <td>Jenette Caldwell</td>
                            <td>Development Lead</td>
                            <td>New York</td>
                            <td>30</td>
                            <td>2011/09/03</td>
                            <td>$345,000</td>
                        </tr>
                        <tr>
                            <td>Yuri Berry</td>
                            <td>Chief Marketing Officer (CMO)</td>
                            <td>New York</td>
                            <td>40</td>
                            <td>2009/06/25</td>
                            <td>$675,000</td>
                        </tr>
                        <tr>
                            <td>Caesar Vance</td>
                            <td>Pre-Sales Support</td>
                            <td>New York</td>
                            <td>21</td>
                            <td>2011/12/12</td>
                            <td>$106,450</td>
                        </tr>
                        <tr>
                            <td>Doris Wilder</td>
                            <td>Sales Assistant</td>
                            <td>Sidney</td>
                            <td>23</td>
                            <td>2010/09/20</td>
                            <td>$85,600</td>
                        </tr>
                        <tr>
                            <td>Angelica Ramos</td>
                            <td>Chief Executive Officer (CEO)</td>
                            <td>London</td>
                            <td>47</td>
                            <td>2009/10/09</td>
                            <td>$1,200,000</td>
                        </tr>
                        <tr>
                            <td>Gavin Joyce</td>
                            <td>Developer</td>
                            <td>Edinburgh</td>
                            <td>42</td>
                            <td>2010/12/22</td>
                            <td>$92,575</td>
                        </tr>
                        <tr>
                            <td>Jennifer Chang</td>
                            <td>Regional Director</td>
                            <td>Singapore</td>
                            <td>28</td>
                            <td>2010/11/14</td>
                            <td>$357,650</td>
                        </tr>
                        <tr>
                            <td>Brenden Wagner</td>
                            <td>Software Engineer</td>
                            <td>San Francisco</td>
                            <td>28</td>
                            <td>2011/06/07</td>
                            <td>$206,850</td>
                        </tr>
                        <tr>
                            <td>Fiona Green</td>
                            <td>Chief Operating Officer (COO)</td>
                            <td>San Francisco</td>
                            <td>48</td>
                            <td>2010/03/11</td>
                            <td>$850,000</td>
                        </tr>
                        <tr>
                            <td>Shou Itou</td>
                            <td>Regional Marketing</td>
                            <td>Tokyo</td>
                            <td>20</td>
                            <td>2011/08/14</td>
                            <td>$163,000</td>
                        </tr>
                        <tr>
                            <td>Michelle House</td>
                            <td>Integration Specialist</td>
                            <td>Sidney</td>
                            <td>37</td>
                            <td>2011/06/02</td>
                            <td>$95,400</td>
                        </tr>
                        <tr>
                            <td>Suki Burks</td>
                            <td>Developer</td>
                            <td>London</td>
                            <td>53</td>
                            <td>2009/10/22</td>
                            <td>$114,500</td>
                        </tr>
                        <tr>
                            <td>Prescott Bartlett</td>
                            <td>Technical Author</td>
                            <td>London</td>
                            <td>27</td>
                            <td>2011/05/07</td>
                            <td>$145,000</td>
                        </tr>
                        <tr>
                            <td>Gavin Cortez</td>
                            <td>Team Leader</td>
                            <td>San Francisco</td>
                            <td>22</td>
                            <td>2008/10/26</td>
                            <td>$235,500</td>
                        </tr>
                        <tr>
                            <td>Martena Mccray</td>
                            <td>Post-Sales support</td>
                            <td>Edinburgh</td>
                            <td>46</td>
                            <td>2011/03/09</td>
                            <td>$324,050</td>
                        </tr>
                        <tr>
                            <td>Unity Butler</td>
                            <td>Marketing Designer</td>
                            <td>San Francisco</td>
                            <td>47</td>
                            <td>2009/12/09</td>
                            <td>$85,675</td>
                        </tr>
                        <tr>
                            <td>Howard Hatfield</td>
                            <td>Office Manager</td>
                            <td>San Francisco</td>
                            <td>51</td>
                            <td>2008/12/16</td>
                            <td>$164,500</td>
                        </tr>
                        <tr>
                            <td>Hope Fuentes</td>
                            <td>Secretary</td>
                            <td>San Francisco</td>
                            <td>41</td>
                            <td>2010/02/12</td>
                            <td>$109,850</td>
                        </tr>
                        <tr>
                            <td>Vivian Harrell</td>
                            <td>Financial Controller</td>
                            <td>San Francisco</td>
                            <td>62</td>
                            <td>2009/02/14</td>
                            <td>$452,500</td>
                        </tr>
                        <tr>
                            <td>Timothy Mooney</td>
                            <td>Office Manager</td>
                            <td>London</td>
                            <td>37</td>
                            <td>2008/12/11</td>
                            <td>$136,200</td>
                        </tr>
                        <tr>
                            <td>Jackson Bradshaw</td>
                            <td>Director</td>
                            <td>New York</td>
                            <td>65</td>
                            <td>2008/09/26</td>
                            <td>$645,750</td>
                        </tr>
                        <tr>
                            <td>Olivia Liang</td>
                            <td>Support Engineer</td>
                            <td>Singapore</td>
                            <td>64</td>
                            <td>2011/02/03</td>
                            <td>$234,500</td>
                        </tr>
                        <tr>
                            <td>Bruno Nash</td>
                            <td>Software Engineer</td>
                            <td>London</td>
                            <td>38</td>
                            <td>2011/05/03</td>
                            <td>$163,500</td>
                        </tr>
                        <tr>
                            <td>Sakura Yamamoto</td>
                            <td>Support Engineer</td>
                            <td>Tokyo</td>
                            <td>37</td>
                            <td>2009/08/19</td>
                            <td>$139,575</td>
                        </tr>
                        <tr>
                            <td>Thor Walton</td>
                            <td>Developer</td>
                            <td>New York</td>
                            <td>61</td>
                            <td>2013/08/11</td>
                            <td>$98,540</td>
                        </tr>
                        <tr>
                            <td>Finn Camacho</td>
                            <td>Support Engineer</td>
                            <td>San Francisco</td>
                            <td>47</td>
                            <td>2009/07/07</td>
                            <td>$87,500</td>
                        </tr>
                        <tr>
                            <td>Serge Baldwin</td>
                            <td>Data Coordinator</td>
                            <td>Singapore</td>
                            <td>64</td>
                            <td>2012/04/09</td>
                            <td>$138,575</td>
                        </tr>
                        <tr>
                            <td>Zenaida Frank</td>
                            <td>Software Engineer</td>
                            <td>New York</td>
                            <td>63</td>
                            <td>2010/01/04</td>
                            <td>$125,250</td>
                        </tr>
                        <tr>
                            <td>Zorita Serrano</td>
                            <td>Software Engineer</td>
                            <td>San Francisco</td>
                            <td>56</td>
                            <td>2012/06/01</td>
                            <td>$115,000</td>
                        </tr>
                        <tr>
                            <td>Jennifer Acosta</td>
                            <td>Junior Javascript Developer</td>
                            <td>Edinburgh</td>
                            <td>43</td>
                            <td>2013/02/01</td>
                            <td>$75,650</td>
                        </tr>
                        <tr>
                            <td>Cara Stevens</td>
                            <td>Sales Assistant</td>
                            <td>New York</td>
                            <td>46</td>
                            <td>2011/12/06</td>
                            <td>$145,600</td>
                        </tr>
                        <tr>
                            <td>Hermione Butler</td>
                            <td>Regional Director</td>
                            <td>London</td>
                            <td>47</td>
                            <td>2011/03/21</td>
                            <td>$356,250</td>
                        </tr>
                        <tr>
                            <td>Lael Greer</td>
                            <td>Systems Administrator</td>
                            <td>London</td>
                            <td>21</td>
                            <td>2009/02/27</td>
                            <td>$103,500</td>
                        </tr>
                        <tr>
                            <td>Jonas Alexander</td>
                            <td>Developer</td>
                            <td>San Francisco</td>
                            <td>30</td>
                            <td>2010/07/14</td>
                            <td>$86,500</td>
                        </tr>
                        <tr>
                            <td>Shad Decker</td>
                            <td>Regional Director</td>
                            <td>Edinburgh</td>
                            <td>51</td>
                            <td>2008/11/13</td>
                            <td>$183,000</td>
                        </tr>
                        <tr>
                            <td>Michael Bruce</td>
                            <td>Javascript Developer</td>
                            <td>Singapore</td>
                            <td>29</td>
                            <td>2011/06/27</td>
                            <td>$183,000</td>
                        </tr>
                        <tr>
                            <td>Donna Snider</td>
                            <td>Customer Support</td>
                            <td>New York</td>
                            <td>27</td>
                            <td>2011/01/25</td>
                            <td>$112,000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
