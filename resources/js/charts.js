import * as echarts from 'echarts';

const reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

const cashflow = document.getElementById('cashflow-chart');

if (cashflow) {
    const chart = echarts.init(cashflow);

    chart.setOption({
        grid: { left: 8, right: 8, top: 24, bottom: 0, containLabel: true },
        xAxis: {
            type: 'category',
            data: ['Okt', 'Nov', 'Des', 'Jan', 'Feb', 'Mar'],
            axisLine: { lineStyle: { color: '#e5e7eb' } },
            axisTick: { show: false },
            axisLabel: { color: '#6b7280', fontSize: 12 },
        },
        yAxis: {
            type: 'value',
            splitLine: { lineStyle: { color: '#f3f4f6' } },
            axisLabel: { color: '#9ca3af', fontSize: 11 },
        },
        tooltip: {
            trigger: 'axis',
            axisPointer: { type: 'shadow' },
            valueFormatter: (value) => `Rp ${value} jt`,
        },
        series: [
            {
                name: 'Pemasukan',
                type: 'bar',
                data: [85, 95, 110, 108, 118, 132],
                itemStyle: { color: '#0d9488', borderRadius: [4, 4, 0, 0] },
                barWidth: 12,
            },
            {
                name: 'Pengeluaran',
                type: 'bar',
                data: [60, 68, 74, 78, 72, 88],
                itemStyle: { color: '#f59e0b', borderRadius: [4, 4, 0, 0] },
                barWidth: 12,
            },
        ],
        animation: !reduce,
    });

    window.addEventListener('resize', () => chart.resize());
}

const donut = document.getElementById('expense-donut');

if (donut) {
    const chart = echarts.init(donut);

    chart.setOption({
        tooltip: {
            trigger: 'item',
            valueFormatter: (value) => `${value}%`,
        },
        series: [
            {
                type: 'pie',
                radius: ['58%', '80%'],
                label: { show: false },
                data: [
                    { name: 'Kegiatan Sosial', value: 65, itemStyle: { color: '#0d9488' } },
                    { name: 'Operasional', value: 35, itemStyle: { color: '#fbbf24' } },
                ],
                animation: !reduce,
            },
        ],
    });

    window.addEventListener('resize', () => chart.resize());
}
