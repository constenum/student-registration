<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="py-2.5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 bg-white border-b border-gray-200">
                    <form class="space-y-8" method="POST" action="{{ route('update', $student->id) }}">
                        @method("PUT")
                        @csrf
                        <input id="student_number" name="student_number" type="hidden"
                               value="{{ $student->student_number }}">

                        <div>
                            <h2 class="text-2xl leading-3 font-medium text-gray-900">
                                Student Information
                            </h2>
                        </div>

                        <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-12">
                            <div class="sm:col-span-6">
                                <label for="first_name" class="block font-medium text-gray-700">
                                    Legal first name
                                </label>
                                <div class="mt-1">
                                    <input type="text" name="first_name" id="first_name"  value="{{ old('first_name', $student->first_name) }}" autofocus
                                           class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('first_name') border-red-500 bg-red-50 @enderror">
                                </div>

                                @error('first_name')
                                <div class="alert alert-danger text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-6">
                                <label for="preferred_name" class="block font-medium text-gray-700">
                                    Preferred name <span class="mt-1 text-sm text-gray-500 inline-block">(if different than legal first name)</span>
                                </label>
                                <div class="mt-1">
                                    <input type="text" name="preferred_name" id="preferred_name" value="{{ old('preferred_name', $student->preferred_name) }}"
                                           class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('preferred_name') border-red-500 bg-red-50 @enderror">
                                </div>

                                @error('preferred_name')
                                <div class="alert alert-danger text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-6">
                                <label for="middle_name" class="block font-medium text-gray-700">
                                    Middle name
                                </label>
                                <div class="mt-1">
                                    <input type="text" name="middle_name" id="middle_name" value="{{ old('middle_name', $student->middle_name) }}"
                                           class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('middle_name') border-red-500 bg-red-50 @enderror">
                                </div>

                                @error('middle_name')
                                <div class="alert alert-danger text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-6">
                                <label for="last_name" class="block font-medium text-gray-700">
                                    Last name
                                </label>
                                <div class="mt-1">
                                    <input type="text" name="last_name" id="last_name" value="{{ old('last_name', $student->last_name) }}"
                                           class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('last_name') border-red-500 bg-red-50 @enderror">
                                </div>

                                @error('last_name')
                                <div class="alert alert-danger text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-6">
                                <label for="email" class="block font-medium text-gray-700">
                                    Personal email address
                                </label>
                                <div class="mt-1">
                                    <input id="email" name="email" type="email" value="{{ old('email', $student->email) }}"
                                           class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('email') border-red-500 bg-red-50 @enderror">
                                </div>

                                @error('email')
                                <div class="alert alert-danger text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-6">
                                <label for="cell_phone" class="block font-medium text-gray-700">
                                    Student's cell phone
                                </label>
                                <div class="mt-1">
                                    <input id="cell_phone" name="cell_phone" type="text" value="{{ old('cell_phone', $student->cell_phone) }}"
                                           class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('cell_phone') border-red-500 bg-red-50 @enderror">
                                </div>

                                @error('cell_phone')
                                <div class="alert alert-danger text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-6">
                                <label for="country" class="block font-medium text-gray-700">
                                    Biological parents status
                                </label>
                                <div class="mt-1">
                                    <select id="parent_status" name="parent_status"
                                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('parent_status') border-red-500 bg-red-50 @enderror">
                                        <option value="" class="text-sm text-gray-200">-- Please Select --</option>
                                        <option value="Married" {{ old('parent_status', $student->parent_status) ==='Married' ? 'selected' : '' }}>Married</option>
                                        <option value="Partnered" {{ old('parent_status', $student->parent_status) ==='Partnered' ? 'selected' : '' }}>Partnered</option>
                                        <option value="Widowed" {{ old('parent_status', $student->parent_status) ==='Widowed' ? 'selected' : '' }}>Widowed</option>
                                        <option value="Divorced" {{ old('parent_status', $student->parent_status) === 'Divorced' ? 'selected' : '' }}>Divorced</option>
                                        <option value="Separated" {{ old('parent_status', $student->parent_status) === 'Separated' ? 'selected' : '' }}>Separated</option>
                                        <option value="Never Married" {{ old('parent_status', $student->parent_status) ==='Never Married' ? 'selected' : '' }}>Never Married</option>
                                        <option value="Case Worker / Agency" {{ old('parent_status', $student->parent_status) ==='CaseWorker / Agency' ? 'selected' : '' }}>Case Worker / Agency</option>
                                    </select>
                                </div>

                                @error('parent_status')
                                <div class="alert alert-danger text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-6">
                                <label for="student_lives_with" class="block font-medium text-gray-700">
                                    Student lives with
                                </label>
                                <div class="mt-1">
                                    <select id="student_lives_with" name="student_lives_with"
                                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('student_lives_with') border-red-500 bg-red-50 @enderror">
                                        <option value="" class="text-sm text-gray-200">-- Please Select --</option>
                                        <option value="Father/Mother" {{ old('student_lives_with', $student->student_lives_with) ==='Father/Mother' ? 'selected' : '' }}>Father/Mother</option>
                                        <option value="Mother" {{ old('student_lives_with', $student->student_lives_with) ==='Mother' ? 'selected' : '' }}>Mother</option>
                                        <option value="Father" {{ old('student_lives_with', $student->student_lives_with) ==='Father' ? 'selected' : '' }}>Father</option>
                                        <option value="Mother/Stepfather" {{ old('student_lives_with', $student->student_lives_with) ==='Mother/Stepfather' ? 'selected' : '' }}>Mother/Stepfather</option>
                                        <option value="Father/Stepmother" {{ old('student_lives_with', $student->student_lives_with) ==='Father/Stepmother' ? 'selected' : '' }}>Father/Stepmother</option>
                                        <option value="Grandparent or Grandparents" {{ old('student_lives_with', $student->student_lives_with) ==='Grandparent or Grandparents' ? 'selected' : '' }}>Grandparent or Grandparents</option>
                                        <option value="Legal Guardian" {{ old('student_lives_with', $student->student_lives_with) ==='Legal Guardian' ? 'selected' : '' }}>Legal Guardian</option>
                                        <option value="Other" {{ old('student_lives_with', $student->student_lives_with) ==='Other' ? 'selected' : '' }}>Other</option>
                                    </select>
                                </div>

                                @error('student_lives_with')
                                <div class="alert alert-danger text-red-500">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="sm:col-span-12">
                            <h2 class="text-2xl leading-3 font-medium text-gray-900">
                                Primary Household
                            </h2>
                        </div>

                        <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-12">
                            <div class="sm:col-span-10">
                                <label for="primary_household_street" class="block font-medium text-gray-700">
                                    Street address
                                </label>
                                <div class="mt-1">
                                    <input type="text" name="primary_household_street" id="primary_household_street" value="{{ old('primary_household_street', $student->primary_household_street) }}"
                                           class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('primary_household_street') border-red-500 bg-red-50 @enderror">
                                </div>

                                @error('primary_household_street')
                                <div class="alert alert-danger text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-2">
                                <label for="primary_household_unit_number" class="block font-medium text-gray-700">
                                    Unit #
                                </label>
                                <div class="mt-1">
                                    <input type="text" name="primary_household_unit_number" id="primary_household_unit_number" value="{{ old('primary_household_unit_number', $student->primary_household_unit_number) }}"
                                           class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('primary_household_unit_number') border-red-500 bg-red-50 @enderror">
                                </div>

                                @error('primary_household_unit_number')
                                <div class="alert alert-danger text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-4">
                                <label for="primary_household_city" class="block font-medium text-gray-700">
                                    City
                                </label>
                                <div class="mt-1">
                                    <input type="text" name="primary_household_city" id="primary_household_city" value="{{ old('primary_household_city', $student->primary_household_city) }}"
                                           class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('primary_household_city') border-red-500 bg-red-50 @enderror">
                                </div>

                                @error('primary_household_city')
                                <div class="alert alert-danger text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-4">
                                <label for="primary_household_state" class="block font-medium text-gray-700">
                                    State
                                </label>
                                <div class="mt-1">
                                    <input type="text" name="primary_household_state" id="primary_household_state" value="{{ old('primary_household_state', $student->primary_household_state) }}"
                                           class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md  @error('primary_household_state') border-red-500 bg-red-50 @enderror">
                                </div>

                                @error('primary_household_state')
                                <div class="alert alert-danger text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-4">
                                <label for="primary_household_zip" class="block font-medium text-gray-700">
                                    ZIP code
                                </label>
                                <div class="mt-1">
                                    <input type="text" name="primary_household_zip" id="primary_household_zip" value="{{ old('primary_household_zip', $student->primary_household_zip) }}"
                                           class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md  @error('primary_household_zip') border-red-500 bg-red-50 @enderror">
                                </div>

                                @error('primary_household_zip')
                                <div class="alert alert-danger text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-5">
                                <label for="primary_household_phone" class="block font-medium text-gray-700">
                                    Home phone
                                </label>
                                <div class="mt-1">
                                    <input id="primary_household_phone" name="primary_household_phone" type="text" value="{{ old('primary_household_phone', $student->primary_household_phone) }}"
                                           class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md  @error('primary_household_phone') border-red-500 bg-red-50 @enderror">
                                </div>

                                @error('primary_household_phone')
                                <div class="alert alert-danger text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-10">
                                <label for="primary_household_mailing_street" class="block font-medium text-gray-700">
                                    Mailing street address <span class="mt-1 text-sm text-gray-500 inline-block">(if different than physical address)</span>
                                </label>
                                <div class="mt-1">
                                    <input type="text" name="primary_household_mailing_street" id="primary_household_mailing_street" value="{{ old('primary_household_mailing_street', $student->primary_household_mailing_street) }}"
                                           class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md  @error('primary_household_mailng_street') border-red-500 bg-red-50 @enderror">
                                </div>

                                @error('primary_household_mailing_street')
                                <div class="alert alert-danger text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-2">
                                <label for="primary_household_mailing_unit_number" class="block font-medium text-gray-700">
                                    Unit #
                                </label>
                                <div class="mt-1">
                                    <input type="text" name="primary_household_mailing_unit_number" id="primary_household_mailing_unit_number" value="{{ old('primary_household_mailing_unit_number', $student->primary_household_mailing_unit_number) }}"
                                           class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md  @error('primary_household_mailing_unit_number') border-red-500 bg-red-50 @enderror">
                                </div>

                                @error('priamry_household_mailing_unit_number')
                                <div class="alert alert-danger text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-4">
                                <label for="primary_household_mailing_city" class="block font-medium text-gray-700">
                                    Mailing city
                                </label>
                                <div class="mt-1">
                                    <input type="text" name="primary_household_mailing_city" id="primary_household_mailing_city" value="{{ old('primary_household_mailing_city', $student->primary_household_mailing_city) }}"
                                           class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md  @error('primary_household_mailing_city') border-red-500 bg-red-50 @enderror">
                                </div>

                                @error('primary_household_mailing_city')
                                <div class="alert alert-danger text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-4">
                                <label for="primary_household_mailing_state" class="block font-medium text-gray-700">
                                    Mailing state
                                </label>
                                <div class="mt-1">
                                    <input type="text" name="primary_household_mailing_state" id="primary_household_mailing_state" value="{{ old('primary_household_mailing_state', $student->primary_household_mailing_state) }}"
                                           class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md  @error('primary_household_mailing_state') border-red-500 bg-red-50 @enderror">
                                </div>

                                @error('primary_household_mailing_state')
                                <div class="alert alert-danger text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-4">
                                <label for="primary_household_mailing_zip" class="block font-medium text-gray-700">
                                    Mailing ZIP code
                                </label>
                                <div class="mt-1">
                                    <input type="text" name="primary_household_mailing_zip" id="primary_household_mailing_zip" value="{{ old('primary_household_mailing_zip', $student->primary_household_mailing_zip) }}"
                                           class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md  @error('primary_household_mailing_zip') border-red-500 bg-red-50 @enderror">
                                </div>

                                @error('primary_household_mailing_zip')
                                <div class="alert alert-danger text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-12">
                                <h2 class="text-xl leading-normal font-medium text-gray-700">
                                    Primary Household Parent/Guardian 1
                                </h2>
                            </div>

                            <div class="sm:col-span-12">
                                <label for="contact_1_relation" class="block font-medium text-gray-700">
                                    Relationship
                                </label>
                                <div class="mt-1">
                                    <select id="contact_1_relation" name="contact_1_relation"
                                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md  @error('contact_1_relation') border-red-500 bg-red-50 @enderror">
                                        <option value="" class="text-sm text-gray-200">-- Please Select --</option>
                                        <option value="Mother" {{ old('contact_1_relation', $student->contact_1_relation) ==='Mother' ? 'selected' : '' }}>Mother</option>
                                        <option value="Father" {{ old('contact_1_relation', $student->contact_1_relation) ==='Father' ? 'selected' : '' }}>Father</option>
                                        <option value="Stepmother" {{ old('contact_1_relation', $student->contact_1_relation) ==='Stepmother' ? 'selected' : '' }}>Stepmother</option>
                                        <option value="Stepfather" {{ old('contact_1_relation', $student->contact_1_relation) ==='Stepfather' ? 'selected' : '' }}>Stepfather</option>
                                        <option value="Grandmother" {{ old('contact_1_relation', $student->contact_1_relation) ==='Grandmother' ? 'selected' : '' }}>Grandmother</option>
                                        <option value="Grandfather" {{ old('contact_1_relation', $student->contact_1_relation) ==='Grandfather' ? 'selected' : '' }}>Grandfather</option>
                                        <option value="Legal Guardian" {{ old('contact_1_relation', $student->contact_1_relation) ==='Legal Guardian' ? 'selected' : '' }}>Legal Guardian</option>
                                        <option value="Other" {{ old('contact_1_relation', $student->contact_1_relation) ==='Other' ? 'selected' : '' }}>Other</option>
                                    </select>
                                </div>

                                @error('contact_1_relation')
                                <div class="alert alert-danger text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-2">
                                <label for="contact_1_title" class="block font-medium text-gray-700">
                                    Title
                                </label>
                                <div class="mt-1">
                                    <select id="contact_1_title" name="contact_1_title"
                                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md  @error('contact_1_title') border-red-500 bg-red-50 @enderror">
                                        <option value="" class="text-sm text-gray-200">-- Please Select --</option>
                                        <option value="Mr." {{ old('contact_1_title', $student->contact_1_title) ==='Mr.' ? 'selected' : '' }}>Mr.</option>
                                        <option value="Mrs." {{ old('contact_1_title', $student->contact_1_title) ==='Mrs.' ? 'selected' : '' }}>Mrs.</option>
                                        <option value="Ms." {{ old('contact_1_title', $student->contact_1_title) ==='Ms.' ? 'selected' : '' }}>Ms.</option>
                                        <option value="Miss" {{ old('contact_1_title', $student->contact_1_title) ==='Miss' ? 'selected' : '' }}>Miss</option>
                                        <option value="Dr." {{ old('contact_1_title', $student->contact_1_title) ==='Dr.' ? 'selected' : '' }}>Dr.</option>
                                        <option value="Prof." {{ old('contact_1_title', $student->contact_1_title) ==='Prof.' ? 'selected' : '' }}>Prof.</option>
                                        <option value="The Hon." {{ old('contact_1_title', $student->contact_1_title) ==='The Hon.' ? 'selected' : '' }}>The Hon.</option>
                                        <option value="Judge" {{ old('contact_1_title', $student->contact_1_title) ==='Judge' ? 'selected' : '' }}>Judge</option>
                                    </select>
                                </div>

                                @error('contact_1_title')
                                <div class="alert alert-danger text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-5">
                                <label for="contact_1_first_name" class="block font-medium text-gray-700">
                                    First name
                                </label>
                                <div class="mt-1">
                                    <input type="text" name="contact_1_first_name" id="contact_1_first_name" value="{{ old('contact_1_first_name', $student->contact_1_first_name) }}"
                                           class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md  @error('contact_1_first_name') border-red-500 bg-red-50 @enderror">
                                </div>

                                @error('contact_1_first_name')
                                <div class="alert alert-danger text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-5">
                                <label for="contact_1_last_name" class="block font-medium text-gray-700">
                                    Last name
                                </label>
                                <div class="mt-1">
                                    <input type="text" name="contact_1_last_name" id="contact_1_last_name" value="{{ old('contact_1_last_name', $student->contact_1_last_name) }}"
                                           class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md  @error('contact_1_last_name') border-red-500 bg-red-50 @enderror">
                                </div>

                                @error('contact_1_last_name')
                                <div class="alert alert-danger text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-6">
                                <label for="contact_1_email" class="block font-medium text-gray-700">
                                    Email address
                                </label>
                                <div class="mt-1">
                                    <input id="contact_1_email" name="contact_1_email" type="email" value="{{ old('contact_1_email', $student->contact_1_email) }}"
                                           class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md  @error('contact_1_email') border-red-500 bg-red-50 @enderror">
                                </div>

                                @error('contact_1_email')
                                <div class="alert alert-danger text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-6">
                                <label for="contact_1_cell" class="block font-medium text-gray-700">
                                    Cell phone
                                </label>
                                <div class="mt-1">
                                    <input id="contact_1_cell" name="contact_1_cell" type="text" value="{{ old('contact_1_cell', $student->contact_1_cell) }}"
                                           class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md  @error('contact_1_cell') border-red-500 bg-red-50 @enderror">
                                </div>

                                @error('contact_1_cell')
                                <div class="alert alert-danger text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-12">
                                <h2 class="text-xl leading-normal font-medium text-gray-700">
                                    Primary Household Parent/Guardian 2
                                </h2>
                            </div>

                            <div class="sm:col-span-12">
                                <label for="contact_2_relation" class="block font-medium text-gray-700">
                                    Relationship
                                </label>
                                <div class="mt-1">
                                    <select id="contact_2_relation" name="contact_2_relation"
                                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md  @error('contact_2_relation') border-red-500 bg-red-50 @enderror">
                                        <option value="" class="text-sm text-gray-200">-- Please Select --</option>
                                        <option value="Mother" {{ old('contact_2_relation', $student->contact_2_relation) ==='Mother' ? 'selected' : '' }}>Mother</option>
                                        <option value="Father" {{ old('contact_2_relation', $student->contact_2_relation) ==='Father' ? 'selected' : '' }}>Father</option>
                                        <option value="Stepmother" {{ old('contact_2_relation', $student->contact_2_relation) ==='Stepmother' ? 'selected' : '' }}>Stepmother</option>
                                        <option value="Stepfather" {{ old('contact_2_relation', $student->contact_2_relation) ==='Stepfather' ? 'selected' : '' }}>Stepfather</option>
                                        <option value="Grandmother" {{ old('contact_2_relation', $student->contact_2_relation) ==='Grandmother' ? 'selected' : '' }}>Grandmother</option>
                                        <option value="Grandfather" {{ old('contact_2_relation', $student->contact_2_relation) ==='Grandfather' ? 'selected' : '' }}>Grandfather</option>
                                        <option value="Legal Guardian" {{ old('contact_2_relation', $student->contact_2_relation) ==='Legal Guardian' ? 'selected' : '' }}>Legal Guardian</option>
                                        <option value="Other" {{ old('contact_2_relation', $student->contact_2_relation) ==='Other' ? 'selected' : '' }}>Other</option>
                                    </select>
                                </div>

                                @error('contact_2_relation')
                                <div class="alert alert-danger text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-2">
                                <label for="contact_2_title" class="block font-medium text-gray-700">
                                    Title
                                </label>
                                <div class="mt-1">
                                    <select id="contact_2_title" name="contact_2_title"
                                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md  @error('contact_2_title') border-red-500 bg-red-50 @enderror">
                                        <option value="" class="text-sm text-gray-200">-- Please Select --</option>
                                        <option value="Mr." {{ old('contact_2_title', $student->contact_2_title) ==='Mr.' ? 'selected' : '' }}>Mr.</option>
                                        <option value="Mrs." {{ old('contact_2_title', $student->contact_2_title) ==='Mrs.' ? 'selected' : '' }}>Mrs.</option>
                                        <option value="Ms." {{ old('contact_2_title', $student->contact_2_title) ==='Ms.' ? 'selected' : '' }}>Ms.</option>
                                        <option value="Miss" {{ old('contact_2_title', $student->contact_2_title) ==='Miss' ? 'selected' : '' }}>Miss</option>
                                        <option value="Dr." {{ old('contact_2_title', $student->contact_2_title) ==='Dr.' ? 'selected' : '' }}>Dr.</option>
                                        <option value="Prof." {{ old('contact_2_title', $student->contact_2_title) ==='Prof.' ? 'selected' : '' }}>Prof.</option>
                                        <option value="The Hon." {{ old('contact_2_title', $student->contact_2_title) ==='The Hon.' ? 'selected' : '' }}>The Hon.</option>
                                        <option value="Judge" {{ old('contact_2_title', $student->contact_2_title) ==='Judge' ? 'selected' : '' }}>Judge</option>
                                    </select>
                                </div>

                                @error('contact_2_title')
                                <div class="alert alert-danger text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-5">
                                <label for="contact_2_first_name" class="block font-medium text-gray-700">
                                    First name
                                </label>
                                <div class="mt-1">
                                    <input type="text" name="contact_2_first_name" id="contact_2_first_name" value="{{ old('contact_2_first_name', $student->contact_2_first_name) }}"
                                           class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md  @error('contact_2_first_name') border-red-500 bg-red-50 @enderror">
                                </div>

                                @error('contact_2_first_name')
                                <div class="alert alert-danger text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-5">
                                <label for="contact_2_last_name" class="block font-medium text-gray-700">
                                    Last name
                                </label>
                                <div class="mt-1">
                                    <input type="text" name="contact_2_last_name" id="contact_2_last_name" value="{{ old('contact_2_last_name', $student->contact_2_last_name) }}"
                                           class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md  @error('contact_2_last_name') border-red-500 bg-red-50 @enderror">
                                </div>

                                @error('contact_2_last_name')
                                <div class="alert alert-danger text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-6">
                                <label for="contact_2_email" class="block font-medium text-gray-700">
                                    Email address
                                </label>
                                <div class="mt-1">
                                    <input id="contact_2_email" name="contact_2_email" type="email" value="{{ old('contact_2_email', $student->contact_2_email) }}"
                                           class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md  @error('contact_2_email') border-red-500 bg-red-50 @enderror">
                                </div>

                                @error('contact_2_email')
                                <div class="alert alert-danger text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-6">
                                <label for="contact_2_cell" class="block font-medium text-gray-700">
                                    Cell phone
                                </label>
                                <div class="mt-1">
                                    <input id="contact_2_cell" name="contact_2_cell" type="text" value="{{ old('contact_2_cell', $student->contact_2_cell) }}"
                                           class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md  @error('contact_2_cell') border-red-500 bg-red-50 @enderror">
                                </div>

                                @error('contact_2_cell')
                                <div class="alert alert-danger text-red-500">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="sm:col-span-12">
                            <h2 class="text-2xl leading-3 font-medium text-gray-900">
                                Secondary Household
                            </h2>
                        </div>

                        <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-12">
                            <div class="sm:col-span-10">
                                <label for="secondary_household_street" class="block font-medium text-gray-700">
                                    Street address
                                </label>
                                <div class="mt-1">
                                    <input type="text" name="secondary_household_street" id="secondary_household_street" value="{{ old('secondary_household_street', $student->secondary_household_street) }}"
                                           class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('secondary_household_street') border-red-500 bg-red-50 @enderror">
                                </div>

                                @error('secondary_household_street')
                                <div class="alert alert-danger text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-2">
                                <label for="secondary_household_unit_number" class="block font-medium text-gray-700">
                                    Unit #
                                </label>
                                <div class="mt-1">
                                    <input type="text" name="secondary_household_unit_number" id="secondary_household_unit_number" value="{{ old('secondary_household_unit_number', $student->secondary_household_unit_number) }}"
                                           class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('secondary_household_unit_number') border-red-500 bg-red-50 @enderror">
                                </div>

                                @error('secondary_household_unit_number')
                                <div class="alert alert-danger text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-4">
                                <label for="secondary_household_city" class="block font-medium text-gray-700">
                                    City
                                </label>
                                <div class="mt-1">
                                    <input type="text" name="secondary_household_city" id="secondary_household_city" value="{{ old('secondary_household_city', $student->secondary_household_city) }}"
                                           class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('secondary_household_city') border-red-500 bg-red-50 @enderror">
                                </div>

                                @error('secondary_household_city')
                                <div class="alert alert-danger text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-4">
                                <label for="secondary_household_state" class="block font-medium text-gray-700">
                                    State
                                </label>
                                <div class="mt-1">
                                    <input type="text" name="secondary_household_state" id="secondary_household_state" value="{{ old('secondary_household_state', $student->secondary_household_state) }}"
                                           class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md  @error('secondary_household_state') border-red-500 bg-red-50 @enderror">
                                </div>

                                @error('secondary_household_state')
                                <div class="alert alert-danger text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-4">
                                <label for="secondary_household_zip" class="block font-medium text-gray-700">
                                    ZIP code
                                </label>
                                <div class="mt-1">
                                    <input type="text" name="secondary_household_zip" id="secondary_household_zip" value="{{ old('secondary_household_zip', $student->secondary_household_zip) }}"
                                           class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md  @error('secondary_household_zip') border-red-500 bg-red-50 @enderror">
                                </div>

                                @error('secondary_household_zip')
                                <div class="alert alert-danger text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-5">
                                <label for="secondary_household_phone" class="block font-medium text-gray-700">
                                    Home phone
                                </label>
                                <div class="mt-1">
                                    <input id="secondary_household_phone" name="secondary_household_phone" type="text" value="{{ old('secondary_household_phone', $student->secondary_household_phone) }}"
                                           class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md  @error('secondary_household_phone') border-red-500 bg-red-50 @enderror">
                                </div>

                                @error('secondary_household_phone')
                                <div class="alert alert-danger text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-10">
                                <label for="secondary_household_mailing_street" class="block font-medium text-gray-700">
                                    Mailing street address <span class="mt-1 text-sm text-gray-500 inline-block">(if different than physical address)</span>
                                </label>
                                <div class="mt-1">
                                    <input type="text" name="secondary_household_mailing_street" id="secondary_household_mailing_street" value="{{ old('secondary_household_mailing_street', $student->secondary_household_mailing_street) }}"
                                           class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md  @error('secondary_household_mailng_street') border-red-500 bg-red-50 @enderror">
                                </div>

                                @error('secondary_household_mailing_street')
                                <div class="alert alert-danger text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-2">
                                <label for="secondary_household_mailing_unit_number" class="block font-medium text-gray-700">
                                    Unit #
                                </label>
                                <div class="mt-1">
                                    <input type="text" name="secondary_household_mailing_unit_number" id="secondary_household_mailing_unit_number" value="{{ old('secondary_household_mailing_unit_number', $student->secondary_household_mailing_unit_number) }}"
                                           class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md  @error('secondary_household_mailing_unit_number') border-red-500 bg-red-50 @enderror">
                                </div>

                                @error('secondary_household_mailing_unit_number')
                                <div class="alert alert-danger text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-4">
                                <label for="secondary_household_mailing_city" class="block font-medium text-gray-700">
                                    Mailing city
                                </label>
                                <div class="mt-1">
                                    <input type="text" name="secondary_household_mailing_city" id="secondary_household_mailing_city" value="{{ old('secondary_household_mailing_city', $student->secondary_household_mailing_city) }}"
                                           class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md  @error('secondary_household_mailing_city') border-red-500 bg-red-50 @enderror">
                                </div>

                                @error('secondary_household_mailing_city')
                                <div class="alert alert-danger text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-4">
                                <label for="secondary_household_mailing_state" class="block font-medium text-gray-700">
                                    Mailing state
                                </label>
                                <div class="mt-1">
                                    <input type="text" name="secondary_household_mailing_state" id="secondary_household_mailing_state" value="{{ old('secondary_household_mailing_state', $student->secondary_household_mailing_state) }}"
                                           class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md  @error('secondary_household_mailing_state') border-red-500 bg-red-50 @enderror">
                                </div>

                                @error('secondary_household_mailing_state')
                                <div class="alert alert-danger text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-4">
                                <label for="secondary_household_mailing_zip" class="block font-medium text-gray-700">
                                    Mailing ZIP code
                                </label>
                                <div class="mt-1">
                                    <input type="text" name="secondary_household_mailing_zip" id="secondary_household_mailing_zip" value="{{ old('secondary_household_mailing_zip', $student->secondary_household_mailing_zip) }}"
                                           class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md  @error('secondary_household_mailing_zip') border-red-500 bg-red-50 @enderror">
                                </div>

                                @error('secondary_household_mailing_zip')
                                <div class="alert alert-danger text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-12">
                                <h2 class="text-xl leading-normal font-medium text-gray-700">
                                    Secondary Household Parent/Guardian 1
                                </h2>
                            </div>

                            <div class="sm:col-span-12">
                                <label for="contact_3_relation" class="block font-medium text-gray-700">
                                    Relationship
                                </label>
                                <div class="mt-1">
                                    <select id="contact_3_relation" name="contact_3_relation"
                                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md  @error('contact_3_relation') border-red-500 bg-red-50 @enderror">
                                        <option value="" class="text-sm text-gray-200">-- Please Select --</option>
                                        <option value="Mother" {{ old('contact_3_relation', $student->contact_3_relation) ==='Mother' ? 'selected' : '' }}>Mother</option>
                                        <option value="Father" {{ old('contact_3_relation', $student->contact_3_relation) ==='Father' ? 'selected' : '' }}>Father</option>
                                        <option value="Stepmother" {{ old('contact_3_relation', $student->contact_3_relation) ==='Stepmother' ? 'selected' : '' }}>Stepmother</option>
                                        <option value="Stepfather" {{ old('contact_3_relation', $student->contact_3_relation) ==='Stepfather' ? 'selected' : '' }}>Stepfather</option>
                                        <option value="Grandmother" {{ old('contact_3_relation', $student->contact_3_relation) ==='Grandmother' ? 'selected' : '' }}>Grandmother</option>
                                        <option value="Grandfather" {{ old('contact_3_relation', $student->contact_3_relation) ==='Grandfather' ? 'selected' : '' }}>Grandfather</option>
                                        <option value="Legal Guardian" {{ old('contact_3_relation', $student->contact_3_relation) ==='Legal Guardian' ? 'selected' : '' }}>Legal Guardian</option>
                                        <option value="Other" {{ old('contact_3_relation', $student->contact_3_relation) ==='Other' ? 'selected' : '' }}>Other</option>
                                    </select>
                                </div>

                                @error('contact_3_relation')
                                <div class="alert alert-danger text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-2">
                                <label for="contact_3_title" class="block font-medium text-gray-700">
                                    Title
                                </label>
                                <div class="mt-1">
                                    <select id="contact_3_title" name="contact_3_title"
                                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md  @error('contact_3_title') border-red-500 bg-red-50 @enderror">
                                        <option value="" class="text-sm text-gray-200">-- Please Select --</option>
                                        <option value="Mr." {{ old('contact_3_title', $student->contact_3_title) ==='Mr.' ? 'selected' : '' }}>Mr.</option>
                                        <option value="Mrs." {{ old('contact_3_title', $student->contact_3_title) ==='Mrs.' ? 'selected' : '' }}>Mrs.</option>
                                        <option value="Ms." {{ old('contact_3_title', $student->contact_3_title) ==='Ms.' ? 'selected' : '' }}>Ms.</option>
                                        <option value="Miss" {{ old('contact_3_title', $student->contact_3_title) ==='Miss' ? 'selected' : '' }}>Miss</option>
                                        <option value="Dr." {{ old('contact_3_title', $student->contact_3_title) ==='Dr.' ? 'selected' : '' }}>Dr.</option>
                                        <option value="Prof." {{ old('contact_3_title', $student->contact_3_title) ==='Prof.' ? 'selected' : '' }}>Prof.</option>
                                        <option value="The Hon." {{ old('contact_3_title', $student->contact_3_title) ==='The Hon.' ? 'selected' : '' }}>The Hon.</option>
                                        <option value="Judge" {{ old('contact_3_title', $student->contact_3_title) ==='Judge' ? 'selected' : '' }}>Judge</option>
                                    </select>
                                </div>

                                @error('contact_3_title')
                                <div class="alert alert-danger text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-5">
                                <label for="contact_3_first_name" class="block font-medium text-gray-700">
                                    First name
                                </label>
                                <div class="mt-1">
                                    <input type="text" name="contact_3_first_name" id="contact_3_first_name" value="{{ old('contact_3_first_name', $student->contact_3_first_name) }}"
                                           class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md  @error('contact_3_first_name') border-red-500 bg-red-50 @enderror">
                                </div>

                                @error('contact_3_first_name')
                                <div class="alert alert-danger text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-5">
                                <label for="contact_3_last_name" class="block font-medium text-gray-700">
                                    Last name
                                </label>
                                <div class="mt-1">
                                    <input type="text" name="contact_3_last_name" id="contact_3_last_name" value="{{ old('contact_3_last_name', $student->contact_3_last_name) }}"
                                           class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md  @error('contact_3_last_name') border-red-500 bg-red-50 @enderror">
                                </div>

                                @error('contact_3_last_name')
                                <div class="alert alert-danger text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-6">
                                <label for="contact_3_email" class="block font-medium text-gray-700">
                                    Email address
                                </label>
                                <div class="mt-1">
                                    <input id="contact_3_email" name="contact_3_email" type="email" value="{{ old('contact_3_email', $student->contact_3_email) }}"
                                           class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md  @error('contact_3_email') border-red-500 bg-red-50 @enderror">
                                </div>

                                @error('contact_3_email')
                                <div class="alert alert-danger text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-6">
                                <label for="contact_3_cell" class="block font-medium text-gray-700">
                                    Cell phone
                                </label>
                                <div class="mt-1">
                                    <input id="contact_3_cell" name="contact_3_cell" type="text" value="{{ old('contact_3_cell', $student->contact_3_cell) }}"
                                           class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md  @error('contact_3_cell') border-red-500 bg-red-50 @enderror">
                                </div>

                                @error('contact_3_cell')
                                <div class="alert alert-danger text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-12">
                                <h2 class="text-xl leading-normal font-medium text-gray-700">
                                    Secondary Household Parent/Guardian 2
                                </h2>
                            </div>

                            <div class="sm:col-span-12">
                                <label for="contact_4_relation" class="block font-medium text-gray-700">
                                    Relationship
                                </label>
                                <div class="mt-1">
                                    <select id="contact_4_relation" name="contact_4_relation"
                                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md  @error('contact_4_relation') border-red-500 bg-red-50 @enderror">
                                        <option value="" class="text-sm text-gray-200">-- Please Select --</option>
                                        <option value="Mother" {{ old('contact_4_relation', $student->contact_4_relation) ==='Mother' ? 'selected' : '' }}>Mother</option>
                                        <option value="Father" {{ old('contact_4_relation', $student->contact_4_relation) ==='Father' ? 'selected' : '' }}>Father</option>
                                        <option value="Stepmother" {{ old('contact_4_relation', $student->contact_4_relation) ==='Stepmother' ? 'selected' : '' }}>Stepmother</option>
                                        <option value="Stepfather" {{ old('contact_4_relation', $student->contact_4_relation) ==='Stepfather' ? 'selected' : '' }}>Stepfather</option>
                                        <option value="Grandmother" {{ old('contact_4_relation', $student->contact_4_relation) ==='Grandmother' ? 'selected' : '' }}>Grandmother</option>
                                        <option value="Grandfather" {{ old('contact_4_relation', $student->contact_4_relation) ==='Grandfather' ? 'selected' : '' }}>Grandfather</option>
                                        <option value="Legal Guardian" {{ old('contact_4_relation', $student->contact_4_relation) ==='Legal Guardian' ? 'selected' : '' }}>Legal Guardian</option>
                                        <option value="Other" {{ old('contact_4_relation', $student->contact_4_relation) ==='Other' ? 'selected' : '' }}>Other</option>
                                    </select>
                                </div>

                                @error('contact_4_relation')
                                <div class="alert alert-danger text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-2">
                                <label for="contact_4_title" class="block font-medium text-gray-700">
                                    Title
                                </label>
                                <div class="mt-1">
                                    <select id="contact_4_title" name="contact_4_title"
                                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md  @error('contact_4_title') border-red-500 bg-red-50 @enderror">
                                        <option value="" class="text-sm text-gray-200">-- Please Select --</option>
                                        <option value="Mr." {{ old('contact_4_title', $student->contact_4_title) ==='Mr.' ? 'selected' : '' }}>Mr.</option>
                                        <option value="Mrs." {{ old('contact_4_title', $student->contact_4_title) ==='Mrs.' ? 'selected' : '' }}>Mrs.</option>
                                        <option value="Ms." {{ old('contact_4_title', $student->contact_4_title) ==='Ms.' ? 'selected' : '' }}>Ms.</option>
                                        <option value="Miss" {{ old('contact_4_title', $student->contact_4_title) ==='Miss' ? 'selected' : '' }}>Miss</option>
                                        <option value="Dr." {{ old('contact_4_title', $student->contact_4_title) ==='Dr.' ? 'selected' : '' }}>Dr.</option>
                                        <option value="Prof." {{ old('contact_4_title', $student->contact_4_title) ==='Prof.' ? 'selected' : '' }}>Prof.</option>
                                        <option value="The Hon." {{ old('contact_4_title', $student->contact_4_title) ==='The Hon.' ? 'selected' : '' }}>The Hon.</option>
                                        <option value="Judge" {{ old('contact_4_title', $student->contact_4_title) ==='Judge' ? 'selected' : '' }}>Judge</option>
                                    </select>
                                </div>

                                @error('contact_4_title')
                                <div class="alert alert-danger text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-5">
                                <label for="contact_4_first_name" class="block font-medium text-gray-700">
                                    First name
                                </label>
                                <div class="mt-1">
                                    <input type="text" name="contact_4_first_name" id="contact_4_first_name" value="{{ old('contact_4_first_name', $student->contact_4_first_name) }}"
                                           class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md  @error('contact_4_first_name') border-red-500 bg-red-50 @enderror">
                                </div>

                                @error('contact_4_first_name')
                                <div class="alert alert-danger text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-5">
                                <label for="contact_4_last_name" class="block font-medium text-gray-700">
                                    Last name
                                </label>
                                <div class="mt-1">
                                    <input type="text" name="contact_4_last_name" id="contact_4_last_name" value="{{ old('contact_4_last_name', $student->contact_4_last_name) }}"
                                           class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md  @error('contact_4_last_name') border-red-500 bg-red-50 @enderror">
                                </div>

                                @error('contact_4_last_name')
                                <div class="alert alert-danger text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-6">
                                <label for="contact_4_email" class="block font-medium text-gray-700">
                                    Email address
                                </label>
                                <div class="mt-1">
                                    <input id="contact_4_email" name="contact_4_email" type="email" value="{{ old('contact_4_email', $student->contact_4_email) }}"
                                           class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md  @error('contact_4_email') border-red-500 bg-red-50 @enderror">
                                </div>

                                @error('contact_4_email')
                                <div class="alert alert-danger text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-6">
                                <label for="contact_4_cell" class="block font-medium text-gray-700">
                                    Cell phone
                                </label>
                                <div class="mt-1">
                                    <input id="contact_4_cell" name="contact_4_cell" type="text" value="{{ old('contact_4_cell', $student->contact_4_cell) }}"
                                           class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md  @error('contact_4_cell') border-red-500 bg-red-50 @enderror">
                                </div>

                                @error('contact_4_cell')
                                <div class="alert alert-danger text-red-500">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <h2 class="text-2xl leading-3 font-medium text-gray-900">
                                Tuition Information
                            </h2>
                        </div>

                        <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-12">
                            <div class="sm:col-span-6">
                                <label for="tuition_payer" class="block font-medium text-gray-700">
                                    Who will pay tuition
                                </label>
                                <div class="mt-1">
                                    <select id="tuition_payer" name="tuition_payer"
                                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md  @error('tuition_payer') border-red-500 bg-red-50 @enderror">
                                        <option value="" class="text-sm text-gray-200">-- Please Select --</option>
                                        <option value="Mother and Father" {{ old('tuition_payer', $student->tuition_payer) ==='Mother and Father' ? 'selected' : '' }}>Mother and Father</option>
                                        <option value="Mother" {{ old('tuition_payer', $student->tuition_payer) ==='Mother' ? 'selected' : '' }}>Mother</option>
                                        <option value="Father" {{ old('tuition_payer', $student->tuition_payer) ==='Father.' ? 'selected' : '' }}>Father</option>
                                        <option value="Other" {{ old('tuition_payer', $student->tuition_payer) ==='Other' ? 'selected' : '' }}>Other</option>
                                    </select>
                                </div>

                                @error('tuition_payer')
                                <div class="alert alert-danger text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-6">
                                <label for="tuition_statement" class="block font-medium text-gray-700">
                                    Who should receive tuition statement
                                </label>
                                <div class="mt-1">
                                    <select id="tuition_statement" name="tuition_statement"
                                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md  @error('tuition_statement') border-red-500 bg-red-50 @enderror">
                                        <option value="" class="text-sm text-gray-200">-- Please Select --</option>
                                        <option value="Mother and Father" {{ old('tuition_statement', $student->tuition_statement) ==='Mother and Father' ? 'selected' : '' }}>Mother and Father</option>
                                        <option value="Mother" {{ old('tuition_statement', $student->tuition_statement) ==='Mother' ? 'selected' : '' }}>Mother</option>
                                        <option value="Father" {{ old('tuition_statement', $student->tuition_statement) ==='Father' ? 'selected' : '' }}>Father</option>
                                        <option value="Other" {{ old('tuition_statement', $student->tuition_statement) ==='Other' ? 'selected' : '' }}>Other</option>
                                    </select>
                                </div>

                                @error('tuition_statement')
                                <div class="alert alert-danger text-red-500">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <h2 class="text-2xl leading-normal font-medium text-gray-900">
                                Photo Publication Permission
                            </h2>
                        </div>

                        <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-12">
                            <div class="mt-1 sm:col-span-12">
                                <label for="photo_publication" class="block font-medium text-gray-700">
                                    I/we hereby grant St. Ursula Academy unlimited permission to use my own or my daughter's work, photo, voice image or likeness in any St. Ursula Academy publicity and/or publication(s). Publications include, but are not limited to school yearbook and newspaper, sports publications, school website, alumnae magazine, television and radio segments, press releases, and any school-approved re-publication thereof. The student's address and phone number will NOT be include.
                                </label>
                                <div class="mt-1">
                                    <select id="photo_publication" name="photo_publication"
                                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md  @error('photo_publication') border-red-500 bg-red-50 @enderror">
                                        <option value="" class="text-sm text-gray-200">-- Please Select --</option>
                                        <option value="1" {{ old('photo_publication', $student->photo_publication) ==='1' ? 'selected' : '' }}>Allow</option>
                                        <option value="0" {{ old('photo_publication', $student->photo_publication) ==='0' ? 'selected' : '' }}>Deny</option>
                                    </select>
                                </div>

                                @error('photo_publication')
                                <div class="alert alert-danger text-red-500">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="pt-5">
                            <div class="flex justify-end">
                                <button type="submit"
                                        class="ml-3 inline-flex justify-center py-4 px-10 border border-transparent shadow-sm text-sm font-medium uppercase tracking-widest rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Update
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
