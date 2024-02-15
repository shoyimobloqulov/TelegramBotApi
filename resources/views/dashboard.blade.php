<x-app-layout>
    <div class="p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mx-auto m-4">
        <div class="grid grid-cols-4 grid-flow-col gap-4">
            <div class="col-span-1">
                <form class="max-w-2xl">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="text">
                            Matn
                        </label>
                        <textarea cols="5" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="text" type="text" wire:model="text" placeholder="Username"></textarea>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="norm_text">
                            To'liq matn ko'rinishi
                        </label>
                        <textarea cols="5" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="norm_text"  wire:model="norm_text" type="text" placeholder="Username"></textarea>
                    </div>

                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Ovozni yuklash</label>
                        <input accept=".wav" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file">
                    </div>
                    <div class="mb-4">
                        <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Saqlash</button>
                    </div>
                </form>
            </div>

            <div class="col-span-3">
                <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
                    <table id="example" class="table-auto w-full">
                        <thead>
                        <tr>
                            <th class="px-4 py-2">Name</th>
                            <th class="px-4 py-2">Position</th>
                            <th class="px-4 py-2">Office</th>
                            <th class="px-4 py-2">Age</th>
                            <th class="px-4 py-2">Start date</th>
                            <th class="px-4 py-2">Salary</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="border px-4 py-2">Tiger Nixon</td>
                            <td class="border px-4 py-2">System Architect</td>
                            <td class="border px-4 py-2">Edinburgh</td>
                            <td class="border px-4 py-2">61</td>
                            <td class="border px-4 py-2">2011/04/25</td>
                            <td class="border px-4 py-2">$320,800</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Garrett Winters</td>
                            <td class="border px-4 py-2">Accountant</td>
                            <td class="border px-4 py-2">Tokyo</td>
                            <td class="border px-4 py-2">63</td>
                            <td class="border px-4 py-2">2011/07/25</td>
                            <td class="border px-4 py-2">$170,750</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Ashton Cox</td>
                            <td class="border px-4 py-2">Junior Technical Author</td>
                            <td class="border px-4 py-2">San Francisco</td>
                            <td class="border px-4 py-2">66</td>
                            <td class="border px-4 py-2">2009/01/12</td>
                            <td class="border px-4 py-2">$86,000</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Cedric Kelly</td>
                            <td class="border px-4 py-2">Senior Javascript Developer</td>
                            <td class="border px-4 py-2">Edinburgh</td>
                            <td class="border px-4 py-2">22</td>
                            <td class="border px-4 py-2">2012/03/29</td>
                            <td class="border px-4 py-2">$433,060</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Airi Satou</td>
                            <td class="border px-4 py-2">Accountant</td>
                            <td class="border px-4 py-2">Tokyo</td>
                            <td class="border px-4 py-2">33</td>
                            <td class="border px-4 py-2">2008/11/28</td>
                            <td class="border px-4 py-2">$162,700</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Brielle Williamson</td>
                            <td class="border px-4 py-2">Integration Specialist</td>
                            <td class="border px-4 py-2">New York</td>
                            <td class="border px-4 py-2">61</td>
                            <td class="border px-4 py-2">2012/12/02</td>
                            <td class="border px-4 py-2">$372,000</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Herrod Chandler</td>
                            <td class="border px-4 py-2">Sales Assistant</td>
                            <td class="border px-4 py-2">San Francisco</td>
                            <td class="border px-4 py-2">59</td>
                            <td class="border px-4 py-2">2012/08/06</td>
                            <td class="border px-4 py-2">$137,500</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Herrod Chandler</td>
                            <td class="border px-4 py-2">Sales Assistant</td>
                            <td class="border px-4 py-2">San Francisco</td>
                            <td class="border px-4 py-2">59</td>
                            <td class="border px-4 py-2">2012/08/06</td>
                            <td class="border px-4 py-2">$137,500</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Ashton Cox</td>
                            <td class="border px-4 py-2">Junior Technical Author</td>
                            <td class="border px-4 py-2">San Francisco</td>
                            <td class="border px-4 py-2">66</td>
                            <td class="border px-4 py-2">2009/01/12</td>
                            <td class="border px-4 py-2">$86,000</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Cedric Kelly</td>
                            <td class="border px-4 py-2">Senior Javascript Developer</td>
                            <td class="border px-4 py-2">Edinburgh</td>
                            <td class="border px-4 py-2">22</td>
                            <td class="border px-4 py-2">2012/03/29</td>
                            <td class="border px-4 py-2">$433,060</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Airi Satou</td>
                            <td class="border px-4 py-2">Accountant</td>
                            <td class="border px-4 py-2">Tokyo</td>
                            <td class="border px-4 py-2">33</td>
                            <td class="border px-4 py-2">2008/11/28</td>
                            <td class="border px-4 py-2">$162,700</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Brielle Williamson</td>
                            <td class="border px-4 py-2">Integration Specialist</td>
                            <td class="border px-4 py-2">New York</td>
                            <td class="border px-4 py-2">61</td>
                            <td class="border px-4 py-2">2012/12/02</td>
                            <td class="border px-4 py-2">$372,000</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

</x-app-layout>
