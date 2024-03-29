<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CarSuspensionModel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
  </head>
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200 text-center">
          @if (session('message'))
          <div class="alert alert-success">
            {{ session('message') }}
          </div>

          <div class="flex h-full bg-white rounded overflow-hidden shadow-lg">
            @else
            @endif
            <div class="w-full md:w-100 text-xl rounded-t">
              <h2 class="text-2xl text-gray-700 font-serif pb-3">{{__('messages.dashboard')}}</h2>
              <div class="w-full md:w-3/3 flex flex-col flex-grow justify-center content-center flex-shrink">
                <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                  <div class="w-full font-bold text-xl text-center text-gray-900 px-6">
                    <p class="text-gray-800 text-xl font-serif pt-5">{{__('messages.dashboard_app')}}</p>
                    <div class=" flex flex-wrap justify-between mt-5">
                      <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                        <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">

                          <img src="https://i.pinimg.com/originals/e7/43/8d/e7438db2aaa57f2842e4807999963f75.gif" class="h-64 w-full rounded-t pb-6">
                          <div class="w-full font-bold text-xl text-gray-900 px-6 m-2">{{__('messages.dashboard_app_info')}}</div>
                          <p class="text-gray-700 font-serif text-base px-6 mb-5">
                            {{__('messages.dashboard_app_info_')}}
                          </p>

                        </div>
                      </div>
                      <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                        <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                          <img src="https://cdn.dribbble.com/users/374101/screenshots/5885738/calculator.gif" class="h-64 w-full rounded-t pb-6">
                          <div class="w-full font-bold text-xl text-gray-900 px-6 m-2"> {{__('messages.dashboard_vypocet')}}</div>
                          <p class="text-gray-700 font-serif text-base px-6 mb-5">
                            {{__('messages.dashboard_vypocet_')}}
                          </p>
                        </div>
                      </div>
                      <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                        <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                          <img src="https://i.gifer.com/5F5d.gif" class="h-64 w-full rounded-t pb-6">
                          <div class="w-full font-bold text-xl text-gray-900 px-6 m-2"> {{__('messages.dashboard_token')}}</div>
                          <p class="text-gray-700 font-serif text-base px-6 mb-5">
                            {{__('messages.dashboard_token_')}}
                          </p>
                        </div>
                      </div>
                      <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                        <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">

                          <img src="https://cdn.dribbble.com/users/398490/screenshots/1716348/users.gif" class="h-64 w-full rounded-t pb-6">
                          <div class="w-full font-bold text-xl text-gray-900 px-6 m-2"> {{__('messages.dashboard_uzivatel')}}</div>
                          <p class="text-gray-700 font-serif text-base px-6 mb-5">
                            {{__('messages.dashboard_uzivatel_')}}
                          </p>

                        </div>
                      </div>
                      <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                        <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                          <img src="https://i.pinimg.com/originals/6a/cf/67/6acf67c5c9341c3c467179668c200895.gif" class="h-64 w-full rounded-t pb-6">
                          <div class="w-full font-bold text-xl text-gray-900 px-6 m-2"> {{__('messages.dashboard_api')}}</div>
                          <p class="text-gray-700 font-serif text-base px-6 mb-5">
                            {{__('messages.dashboard_api_')}}
                          </p>
                        </div>
                      </div>
                      <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                        <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                          <img src="https://logimp.files.wordpress.com/2019/01/viral-parmar1-1.gif" class="h-64 w-full rounded-t pb-6">
                          <div class="w-full font-bold text-xl text-gray-900 px-6 m-2"> {{__('messages.dashboard_team')}}</div>
                          <p class="text-gray-700 font-serif text-base px-6 mb-5">
                            {{__('messages.dashboard_team_')}}
                          </p>
                        </div>
                      </div>
                      <p class="font-bold font-serif text-2xl p-5 m-5 text-center w-full">
                        {{__('messages.dashboard_table_info')}}
                      </p>
                      <div class="m-auto pb-3 m-3 w-7/12">
                        <table class="table-auto w-full text-base">
                          <tr>
                            <th class="bg-blue-200 border text-center px-3 py-4">{{__('messages.dashboard_table_name')}}</th>
                            <th class="bg-blue-200 border text-center px-3 py-4">{{__('messages.dashboard_table_task')}}</th>
                          </tr>
                          <tr>
                            <td class="border px-2 py-2 text-gray-700">Samuel Hančák</td>
                            <td class="border px-2 py-4 text-gray-700">{{__('messages.dashboard_table_r1')}}</td>
                          </tr>
                          <tr>
                            <td class="border px-2 py-4 text-gray-700">Andrej Horník<BR>Matúš Kocián</td>
                            <td class="border px-2 py-2 text-gray-700">{{__('messages.dashboard_table_r2')}}</td>
                          </tr>
                          <tr>
                            <td class="border px-2 py-2 text-gray-700">Samuel Hančák</td>
                            <td class="border px-2 py-2 text-gray-700">{{__('messages.dashboard_table_r3')}}</td>
                          </tr>
                          <tr>
                            <td class="border px-2 py-2 text-gray-700">Samuel Hančák<BR>Matúš Kocián</td>
                            <td class="border px-2 py-2 text-gray-700">{{__('messages.dashboard_table_r4')}}</td>
                          </tr>
                          <tr>
                            <td class="border px-2 py-2 text-gray-700">Matúš Kocián<br>Andrej Horník</td>
                            <td class="border px-2 py-2 text-gray-700">{{__('messages.dashboard_table_r5')}}</td>
                          </tr>
                          <tr>
                            <td class="border px-2 py-2 text-gray-700">Matúš Kocián<BR>Dominika Bemberáková</td>
                            <td class="border px-2 py-2 text-gray-700">{{__('messages.dashboard_table_r6')}}</td>
                          </tr>
                          <tr>
                            <td class="border px-2 py-2 text-gray-700">Matúš Kocián</td>
                            <td class="border px-2 py-2 text-gray-700">{{__('messages.dashboard_table_r7')}}</td>
                          </tr>
                          <tr class="text-red-400">
                            <td class="border px-2 py-2 ">{{__('messages.dashboard_table_imp')}} </td>
                            <td class="border px-2 py-2">{{__('messages.dashboard_table_r8')}}</td>
                          </tr>
                          <tr>
                            <td class="border px-2 py-2 text-gray-700">Dominika Bemberáková</td>
                            <td class="border px-2 py-2 text-gray-700">{{__('messages.dashboard_table_r9')}}</td>
                          </tr>
                          <tr>
                            <td class="border px-2 py-2 text-gray-700">Dominika Bemberáková<BR>Matúš Kocián<BR>Samuel Hančák<br>Andrej Horník</td>
                            <td class="border px-2 py-2 text-gray-700">{{__('messages.dashboard_table_r10')}}</td>
                          </tr>
                          <tr>
                            <td class="border px-2 py-2 text-gray-700">Dominika Bemberáková<br>Matúš Kocián</td>
                            <td class="border px-2 py-2 text-gray-700">{{__('messages.dashboard_table_r11')}}</td>
                          </tr>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</x-app-layout>