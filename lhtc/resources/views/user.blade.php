
            <!-- Deafult Table -->
                <div class="block-area" id="defaultStyle">
                    
                    <table class="table tile">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>name</th>
                                <th>age</th>
                                <th>sex</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($registers as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>              
