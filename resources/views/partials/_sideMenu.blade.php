
    
<nav class="nav flex w-64 min-h-screen font-sans bg-gray-700">
    <aside class="nav flex flex-col w-64 px-4 pt-4 pb-6">
        <button id="btnNav" class="text-2xl flex justify-end pb-4"> <img id="imgMenu" class="w-8 h-8"
                src="{{ Vite::asset('resources/images/left-arrow.png') }}"
                /></button>
        <div id="divMenu" class="flex justify-between">
            <a href="{% url 'home' %}" class="flex items-center text-2xl font-medium text-white  focus:outline-none ">
                <img id="imgMenu" class="w-6 h-6"
                    src="{{ Vite::asset('resources/images/Hotel-d.png') }}" />
                <div class="hide-nav">Hotel MS</div>
            </a>
        </div>

        <ul class="flex flex-col flex-1
         gap-y-10 pt-14">
            <a href="{{ route('staff.index') }}"
                class="flex items-center text-gray-400 gap-x-4 hover:font-bold hover:text-white ">
                <img class="flex items-center w-6 h-6 stroke-current"
                    src="{{ Vite::asset('resources/images/staff.png') }}" />
                <li class="@if(request()->is('admin/staff/*')) text-white font-bold @endif hide-nav">Staff</li>
            </a>

            <a href="{% url 'create_staff' %}"
                class="flex items-center text-gray-400 gap-x-4 hover:font-bold hover:text-white">
                <img class="flex items-center w-6 h-6 stroke-current"
                    src="{{ Vite::asset('resources/images/add-staff.png') }}"
                    />
                <li class="{% if url_name == 'create_staff' %}text-white font-bold{% endif %} hide-nav">New Staff</li>
            </a>

            <a href="{% url 'department' %}"
                class="flex items-center text-gray-400 gap-x-4 hover:font-bold hover:text-white">
                <img class="flex items-center w-6 h-6 stroke-current"
                    src="{{ Vite::asset('resources/images/department.png') }}" />
                <li class="{% if url_name == 'department' %}text-white font-bold{% endif %} hide-nav">Department</li>
            </a>

            <a href="{% url 'tasks' %}"
                class="flex items-center text-gray-400 gap-x-4 hover:font-bold hover:text-white">
                <img class="flex items-center w-6 h-6 stroke-current"
                    src="{{ Vite::asset('resources/images/tasks.png') }}"
                    />
                <li class="{% if url_name == 'tasks' %}text-white font-bold{% endif %} hide-nav">Tasks</li>
            </a>

            <a href="{% url 'about' %}"
                class="flex items-center text-gray-400 gap-x-4 hover:font-bold hover:text-white">
                <img class="flex items-center w-6 h-6 stroke-current"
                    src="{{ Vite::asset('resources/images/about.png') }}"
                    />
                <li class="{% if url_name == 'about' %}text-white font-bold{% endif %} hide-nav">About Us</li>
            </a>

        </ul>

        <div class="hide-nav flex flex-col items-center justify-between py-4 text-gray-400 bg-gray-200 border-2
            border-white rounded-lg gap-y-1">
            <button id="btntheme" class="border p-2 " onclick="switchMode()" value="">
                <p>Switch to Dark</p>
            </button>
            <a href="{% url 'about' %}"
                class="flex items-center text-gray-400 gap-x-4 hover:font-bold hover:text-black">
                <div>Settings</div>
            </a>
            <a href="{% url 'about' %}"
                class="flex items-center text-gray-400 gap-x-4 hover:font-bold hover:text-black">
                <div>Log Off</div>
            </a>
        </div>
    </aside>
</nav>