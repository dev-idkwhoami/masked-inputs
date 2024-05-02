import * as esbuild from 'esbuild'

esbuild.build({
    entryPoints: [
        './resources/js/component.js'
    ],
    outfile: './dist/masked-inputs.js',
    bundle: true,
    mainFields: ['module', 'main'],
    platform: 'neutral',
    treeShaking: true,
    target: ['es2020'],
    minify: true
})
