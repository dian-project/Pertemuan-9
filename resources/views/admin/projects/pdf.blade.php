
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan Data Project</title>

    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 10px;
            color: #222;
        }

        h1 {
            text-align: center;
            font-size: 20px;
            margin-bottom: 5px;
        }

        .subtitle {
            text-align: center;
            margin-bottom: 25px;
            color: #555;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #999;
            padding: 8px;
            text-align: left;
            vertical-align: top;
        }

        th {
            background: #ffc400;
            color: #222;
        }

        .number {
            text-align: center;
            width: 30px;
        }

        .footer {
            margin-top: 20px;
            text-align: right;
            font-size: 9px;
        }
    </style>
</head>
<body>

    <h1>LAPORAN DATA PROJECT</h1>
    <div class="subtitle">Dian Project — Portofolio Digital</div>

    <table>
        <thead>
            <tr>
                <th class="number">No.</th>
                <th>Nama Project</th>
                <th>Kategori / Teknologi</th>
                <th>Deskripsi</th>
                <th>Link Project</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($projects as $index => $project)
                <tr>
                    <td class="number">{{ $index + 1 }}</td>
                    <td>{{ $project->nama }}</td>
                    <td>{{ $project->kategori }}</td>
                    <td>{{ $project->deskripsi }}</td>
                    <td>{{ $project->link ?: '-' }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" style="text-align:center">
                        Belum ada data project.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="footer">
        Total project: {{ $projects->count() }}
    </div>

</body>
</html>
