<div class="sidebar bg-white border-end vh-100 p-3">

    <h4 class="mb-4">
        <span class="text-primary">Todo</span>App
    </h4>

    <ul class="nav flex-column">

        {{-- Dashboard --}}
        <li class="nav-item mb-2">
            <a href="/dashboard"
               class="nav-link">
                <i class="bi bi-house"></i>
                Dashboard
            </a>
        </li>


        {{-- Todo List --}}
        <li class="nav-item mb-2">
            <a href="/tasks"
               class="nav-link">
                <i class="bi bi-list-check"></i>
                Todo List
            </a>
        </li>


        {{-- Add Task --}}
        <li class="nav-item mb-2">
            <a href="/create-task"
               class="nav-link">
                <i class="bi bi-plus-circle"></i>
                Add Task
            </a>
        </li>


        {{-- Completed Tasks --}}
        <li class="nav-item mb-2">
            <a href="/tasks/completed"
               class="nav-link">
                <i class="bi bi-check-circle"></i>
                Completed Task
            </a>
        </li>

    </ul>

</div>