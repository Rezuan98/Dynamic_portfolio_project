@extends('backend.home.master')

@section('keyTitle', 'Add Info')

@section('content')
<div class="container mt-5">
    <h2 class="text-center">Insert Information</h2>
    <form action="{{ route('insert.skill') }}" method="post">
    @csrf

   <!-- IT Skill Name (Multiple Selection) -->
   <div class="mb-3">
    <label for="skill_name" class="form-label">IT Skill Name</label>
    <select class="form-control" name="skill_name" id="skill_name">
        <option value="" disabled selected>Select an IT Skill</option>
        <option value="html">HTML</option>
        <option value="css">CSS</option>
        <option value="javascript">JavaScript</option>
        <option value="jquery">jQuery</option>
        <option value="bootstrap">Bootstrap</option>
        <option value="php">PHP</option>
        <option value="mysql">MySQL</option>
        <option value="laravel">Laravel</option>
        <option value="react">React</option>
        <option value="angular">Angular</option>
        <option value="vuejs">Vue.js</option>
        <option value="nodejs">Node.js</option>
        <option value="express">Express.js</option>
        <option value="mongodb">MongoDB</option>
        <option value="python">Python</option>
        <option value="django">Django</option>
        <option value="flask">Flask</option>
        <option value="java">Java</option>
        <option value="spring">Spring</option>
        <option value="git">Git</option>
        <option value="docker">Docker</option>
        <option value="kubernetes">Kubernetes</option>
        <option value="aws">AWS</option>
        <option value="azure">Azure</option>
        <option value="devops">DevOps</option>
        <option value="linux">Linux</option>
        <option value="bash">Bash</option>
        <option value="graphql">GraphQL</option>
        <option value="typescript">TypeScript</option>
        <option value="swift">Swift</option>
        <option value="kotlin">Kotlin</option>
        <option value="go">Go (Golang)</option>
        <option value="rust">Rust</option>
        <option value="c">C</option>
        <option value="c++">C++</option>
        <option value="csharp">C#</option>
        <option value="ruby">Ruby</option>



    </select>

    <!-- Skill Capacity -->
    <div class="mb-3">
        <label for="skill_capacity" class="form-label">Skill Capacity</label>
        <select class="form-control" name="skill_capacity" id="skill_capacity">
            <option value="">Select skill capacity</option>
            <option value="10">10%</option>
            <option value="20">20%</option>
            <option value="30">30%</option>
            <option value="40">40%</option>
            <option value="50">50%</option>
            <option value="60">60%</option>
            <option value="70">70%</option>
            <option value="80">80%</option>
            <option value="90">90%</option>
            <option value="100">100%</option>
        </select>

        <button type="submit" class="btn btn-primary">Add Skill</button>
    </form>
    </div>
    



    
    
@endsection
