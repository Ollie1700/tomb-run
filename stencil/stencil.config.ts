import { Config } from '@stencil/core';

export const config: Config = {
  namespace: 'stencil',
  outputTargets: [
    {
      type: 'dist',
      esmLoaderPath: '../loader'
    },
    {
      type: 'docs-readme'
    }
  ]
};
