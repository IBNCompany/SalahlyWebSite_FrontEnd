@extends('admin.layout')

@section('title', 'المستخدمون - لوحة التحكم')
@section('page-title', 'المستخدمون')
@section('page-description', 'إدارة وتنظيم المستخدمين على الموقع')

@section('content')
<div class="space-y-6">
    
    <!-- Header Actions -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
        <div class="flex items-center space-x-4 space-x-reverse">
            <div class="w-12 h-12 bg-gradient-to-br from-seeker-primary to-provider-primary rounded-lg flex items-center justify-center">
                <i class="fas fa-users text-white text-xl"></i>
            </div>
            <div>
                <h1 class="text-2xl font-bold text-gray-800">إدارة المستخدمين</h1>
                <p class="text-gray-600">{{ $users->total() ?? 0 }} مستخدم في النظام</p>
            </div>
        </div>
        
        <div class="flex items-center space-x-3 space-x-reverse">
            <a href="{{ route('admin.users.create') }}" 
               class="group w-10 h-10 flex items-center justify-center bg-gradient-to-r from-seeker-primary to-provider-primary text-white rounded-full font-medium hover:shadow-lg hover:scale-[1.05] transition-all duration-300">
                <i class="fas fa-plus"></i>
            </a>
        </div>
    </div>

    <!-- Filters -->
    <div class="card-gradient rounded-2xl p-6 shadow-xl animate-fade-in-up">
        <form id="filtersForm" action="{{ route('admin.users.index') }}" method="GET">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <!-- Search -->
                <div class="md:col-span-1">
                    <div class="relative">
                        <input type="text" 
                               name="search"
                               placeholder="البحث في المستخدمين..."
                               value="{{ request('search') }}"
                               class="w-full pl-10 pr-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-seeker-primary focus:border-transparent transition-all duration-300">
                        <div class="absolute left-3 top-1/2 transform -translate-y-1/2">
                            <i class="fas fa-search text-gray-400"></i>
                        </div>
                    </div>
                </div>
                
                <!-- Admin Filter -->
                <div>
                    <select name="is_super_admin" 
                            class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-seeker-primary focus:border-transparent transition-all duration-300">
                        <option value="">جميع المستخدمين</option>
                        <option value="1" {{ request('is_super_admin') == '1' ? 'selected' : '' }}>المدراء فقط</option>
                        <option value="0" {{ request('is_super_admin') == '0' ? 'selected' : '' }}>منشئين المحتوي</option>
                    </select>
                </div>
                
                <!-- Sort -->
                <div>
                    <select name="sort" 
                            class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-seeker-primary focus:border-transparent transition-all duration-300">
                        <option value="latest" {{ request('sort') == 'latest' ? 'selected' : '' }}>الأحدث أولاً</option>
                        <option value="oldest" {{ request('sort') == 'oldest' ? 'selected' : '' }}>الأقدم أولاً</option>
                        <option value="name" {{ request('sort') == 'name' ? 'selected' : '' }}>ترتيب أبجدي</option>
                        <option value="email" {{ request('sort') == 'email' ? 'selected' : '' }}>ترتيب البريد</option>
                    </select>
                </div>
            </div>
        </form>
    </div>

    <!-- Users Table -->
    <div class="card-gradient rounded-2xl shadow-xl overflow-hidden animate-slide-up">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gradient-to-r from-seeker-primary to-provider-primary text-white">
                    <tr>
                        <th class="text-right p-4 font-semibold">المستخدم</th>
                        <th class="text-right p-4 font-semibold">البريد الإلكتروني</th>
                        <th class="text-center p-4 font-semibold">نوع المستخدم</th>
                        <th class="text-right p-4 font-semibold">تاريخ التسجيل</th>
                        <th class="text-center p-4 font-semibold">الإجراءات</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50">
                    @forelse($users as $user)
                        <tr class="table-hover">
                            <td class="p-4">
                                <div class="flex items-center space-x-3 space-x-reverse">
                                    <div class="w-10 h-10 rounded-full bg-gradient-to-br from-seeker-primary to-provider-primary flex items-center justify-center text-white font-semibold">
                                        {{ strtoupper(substr($user->name, 0, 1)) }}
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-gray-800">{{ $user->name }}</h3>
                                    </div>
                                </div>
                            </td>
                            <td class="p-4">
                                <p class="text-gray-800">{{ $user->email }}</p>
                            </td>
                            <td class="p-4 text-center">
                                @if($user->is_super_admin)
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-purple-100 text-purple-800">
                                        <i class="fas fa-crown text-xs ml-1"></i>
                                        مدير
                                    </span>
                                @else
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-gray-100 text-gray-800">
                                        <i class="fas fa-user text-xs ml-1"></i>
                                        منشئ محتوي
                                    </span>
                                @endif
                            </td>
                            <td class="p-4 text-sm text-gray-600">{{ $user->created_at->format('Y/m/d') }}</td>
                            <td class="p-4">
                                <div class="flex items-center justify-center space-x-2 space-x-reverse">
                                    <!-- View -->
                                    <div class="relative group">
                                        <a href="{{ route('admin.users.show', $user) }}" 
                                           class="p-2 text-blue-600 hover:bg-blue-50 rounded-lg transition-colors">
                                            <i class="fas fa-eye text-sm"></i>
                                        </a>
                                        <span class="absolute bottom-full mb-3 px-3 py-1.5 bg-gray-900 text-white text-xs font-medium rounded-md shadow-md opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 left-1/2 -translate-x-1/2 whitespace-nowrap after:content-[''] after:absolute after:top-full after:left-1/2 after:-translate-x-1/2 after:border-4 after:border-transparent after:border-t-gray-900">
                                            عرض
                                        </span>
                                    </div>

                                    <!-- Edit -->
                                    <div class="relative group">
                                        <a href="{{ route('admin.users.edit', $user) }}" 
                                           class="p-2 text-yellow-600 hover:bg-yellow-50 rounded-lg transition-colors">
                                            <i class="fas fa-edit text-sm"></i>
                                        </a>
                                        <span class="absolute bottom-full mb-3 px-3 py-1.5 bg-gray-900 text-white text-xs font-medium rounded-md shadow-md opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 left-1/2 -translate-x-1/2 whitespace-nowrap after:content-[''] after:absolute after:top-full after:left-1/2 after:-translate-x-1/2 after:border-4 after:border-transparent after:border-t-gray-900">
                                            تعديل
                                        </span>
                                    </div>

                                    <!-- Delete -->
                                    @if(auth()->id() != $user->id)
                                    <div class="relative group">
                                        <button type="button" 
                                                onclick="confirmDelete('{{ route('admin.users.destroy', $user) }}')" 
                                                class="p-2 text-red-600 hover:bg-red-50 rounded-lg transition-colors">
                                            <i class="fas fa-trash text-sm"></i>
                                        </button>
                                        <span class="absolute bottom-full mb-3 px-3 py-1.5 bg-gray-900 text-white text-xs font-medium rounded-md shadow-md opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 left-1/2 -translate-x-1/2 whitespace-nowrap after:content-[''] after:absolute after:top-full after:left-1/2 after:-translate-x-1/2 after:border-4 after:border-transparent after:border-t-gray-900">
                                            حذف
                                        </span>
                                    </div>
                                    @endif
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="p-6 text-center text-gray-500">
                                <i class="fas fa-users text-4xl text-gray-300 mb-4"></i>
                                <p>لا توجد مستخدمون حتى الآن.</p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="p-4">
            {{ $users->links() }}
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
document.addEventListener("DOMContentLoaded", function () {
    let form = document.getElementById("filtersForm");
    let searchInput = form.querySelector("input[name='search']");
    let selects = form.querySelectorAll("select");

    // Auto-submit when changing select
    selects.forEach(select => {
        select.addEventListener("change", () => form.submit());
    });

    // Auto-submit when typing in search (after delay)
    let timer;
    searchInput.addEventListener("input", function () {
        clearTimeout(timer);
        timer = setTimeout(() => form.submit(), 500);
    });
});

function confirmDelete(url) {
    Swal.fire({
        title: 'هل أنت متأكد؟',
        text: 'لن تتمكن من التراجع عن هذا الإجراء وسيتم حذف المستخدم نهائياً',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'نعم، احذف!',
        cancelButtonText: 'إلغاء'
    }).then((result) => {
        if (result.isConfirmed) {
            // Create a form dynamically to submit the DELETE request
            const form = document.createElement('form');
            form.method = 'POST';
            form.action = url;
            
            // Add CSRF token
            const csrfToken = document.createElement('input');
            csrfToken.type = 'hidden';
            csrfToken.name = '_token';
            csrfToken.value = '{{ csrf_token() }}';
            form.appendChild(csrfToken);
            
            // Add DELETE method
            const methodInput = document.createElement('input');
            methodInput.type = 'hidden';
            methodInput.name = '_method';
            methodInput.value = 'DELETE';
            form.appendChild(methodInput);
            
            document.body.appendChild(form);
            form.submit();
        }
    });
}
</script>
@endpush